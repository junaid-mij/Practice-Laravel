<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    function InvoicePage():View{
        return view('pages.dashboard.invoice-page');
    }
    function SalePage():View{
        return view('pages.dashboard.sale-page');
    }
    // CRUD Operations:
    // Create:
    function InvoiceCreate(Request $request){
        DB::beginTransaction();

        try{
            $user_id = $request->header('id');
            $total = $request->input('total');
            $discount = $request->input('discount');
            $vat = $request->input('vat');
            $payable = $request->input('payable');

            $customer_id = $request->input('customer_id');

            $invoice= Invoice::create([
                'total' => $total,
                'discount' => $discount,
                'vat' => $vat,
                'payable' => $payable,
                'user_id' => $user_id,
                'customer_id' => $customer_id
            ]);
            // Picking the invoice id:
            $invoiceID=$invoice->id;
            // Taking Product:
            $products=$request->input('products');
            // Create InvoiceProduct:
            foreach ($products as $EachProduct){
                InvoiceProduct::create([
                    'invoice_id' => $invoiceID,
                    'user_id' => $user_id,
                    'product_id' => $EachProduct['product_id'],
                    'qty' => $EachProduct['qty'],
                    'sale_price' => $EachProduct['sale_price'],
                ]);
            }

            DB::commit();

            return 1;
        }
        catch(Exception $e){
            DB::rollback();
            return 0;
        }
    }
    // Select:
    function InvoiceSelect(Request $request){
        $user_id= $request->header('id');
        return Invoice::where('user_id',$user_id)->with('customer')->get();
    }
    // View:
    function InvoiceDetails(Request $request){
        // Picking User:
        $user_id= $request->header('id');
        // Picking Customer:
        $customerDetails=Customer::where('user_id',$user_id)->where('id',$request->input('cus_id'))->first();
        // Picking Invoice:
        $invoiceTotal= Invoice::where('user_id',$user_id)->where('id',$request->input('inv_id'))->first();
        // Picking Product:
        $invoiceProduct= InvoiceProduct::where('user_id',$user_id)->where('invoice_id', $request->input('inv_id'))->get();

        return array(
            'customer'=>$customerDetails,
            'invoice'=>$invoiceTotal,
            'product'=>$invoiceProduct
        );
    }
    // Delete:
    function InvoiceDelete(Request $request){
        DB::beginTransaction();

        try{
            $user_id = $request->header('id');
            // Delete InvoiceProduct:
            InvoiceProduct::where('user_id',$user_id)->where('invoice_id',$request->input('inv_id'))->delete();
            // Delete Invoice:
            Invoice::where('id',$request->input('inv_id'))->delete();

            DB::commit();

            return 1;
        }
        catch(Exception $e){
            DB::rollback();
            return 0;
        }
    }
}
