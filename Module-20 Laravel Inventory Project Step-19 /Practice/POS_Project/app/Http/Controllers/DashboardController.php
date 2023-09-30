<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard Functions:
    function DashboardPage():View{
        return view('pages.dashboard.dashboard-page');
    }
    // Summary Functions:
    function Summary(Request $request):array {
        // Receiveing User ID:
        $user_id = $request->header('id');
        // Receiveing Summary Information:
        $Product = Product::where('user_id', $user_id)->count();
        $Category = Category::where('user_id', $user_id)->count();
        $Customer = Customer::where('user_id', $user_id)->count();
        $Invoice = Invoice::where('user_id', $user_id)->count();
        $total = Invoice::where('user_id', $user_id)->sum('total');
        $vat = Invoice::where('user_id', $user_id)->sum('vat');
        $payable = Invoice::where('user_id', $user_id)->sum('payable');
        // Returning the Summary Information:
        return[
            'product' => $Product,
            'category' => $Category,
            'customer' => $Customer,
            'invoice' => $Invoice,
            'total' => round($total, 2),
            'vat' => round($vat, 2),
            'payable' => round($payable, 2)
        ];
    }
}
