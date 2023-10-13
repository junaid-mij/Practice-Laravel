<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // View Report Page:
    function ReportPage(){
        return view('pages.dashboard.report-page');
    }
    // Sales Report Functions:
    function SalesReport(Request $request){
        // Pick User ID:
        $user_id = $request->header('id');
        // Pick Date Range:
        $FromDate = date('Y-m-d', strtotime($request->FromDate));
        $ToDate = date('Y-m-d', strtotime($request->ToDate));
        // Summary Report Generate:
        $total = Invoice::where('user_id', $user_id)->whereDate('created_at','>=', $FromDate)->whereDate('created_at','<=', $ToDate)->sum('total');
        $vat = Invoice::where('user_id', $user_id)->whereDate('created_at','>=', $FromDate)->whereDate('created_at','<=', $ToDate)->sum('vat');
        $payable = Invoice::where('user_id', $user_id)->whereDate('created_at','>=', $FromDate)->whereDate('created_at','<=', $ToDate)->sum('payable');
        $discount = Invoice::where('user_id', $user_id)->whereDate('created_at','>=', $FromDate)->whereDate('created_at','<=', $ToDate)->sum('discount');
        // Details Report Generate:
        $list = Invoice::where('user_id', $user_id)
            ->whereDate('created_at','>=', $FromDate)
            ->whereDate('created_at','<=', $ToDate)
            ->with('customer')->get();

        // Report Data:
        $data =[
            'payable' => $payable,
            'discount' => $discount,
            'total' => $total,
            'vat' => $vat,
            'list' => $list,
            'FromDate' => $FromDate,
            'ToDate' => $ToDate
        ];
        // Create PDF:
        $pdf = Pdf::loadView('report.SalesReport',$data);
        // Download PDF:
        return $pdf->download('sales.pdf');
    }
}
