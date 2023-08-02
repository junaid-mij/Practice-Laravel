<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function CustomerPage(){
        return view('pages.dashboard.customer-page');
    }
    // CRUD Operations:
    // Create:
    function CustomerCreate(Request $request){
        $user_id = $request->header('id');
        return Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'user_id' => $user_id
        ]);
    }
    // Read:
    function CustomerList(Request $request){
        $user_id = $request->header('id');
        return Customer::where('user_id', $user_id)->get();
    }
    // Update:
    function CustomerUpdate(Request $request){
        $customer_id= $request->input('id');
        $user_id= $request->header('id');
        return Customer::where('id', $customer_id)->where('user_id', $user_id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
        ]);
    }
    function CustomerByID(Request $request){
        $customer_id= $request->input('id');
        $user_id= $request->header('id');
        return Customer::where('id', $customer_id)->where('user_id', $user_id)->first();
    }
    // Delete:
    function CustomerDelete(Request $request){
        $customer_id= $request->input('id');
        $user_id= $request->header('id');
        return Customer::where('id', $customer_id)->where('user_id', $user_id)->delete();
    }
}
