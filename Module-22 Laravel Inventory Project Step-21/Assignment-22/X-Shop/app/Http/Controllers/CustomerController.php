<?php

namespace App\Http\Controllers;

use App\Mail\PromoMail;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    // Promotional Email:
    function SendPromoMail(Request $request){
        // Taking email from input field:
        $email = $request->input('email');
        $promo=1;
        // Checking the email is valid or not:
        $count = User::where('email', $email)->count();

        // Condition:
        if($count==1){
            // Send Promo Mail to the email:
            Mail::to($email)->send(new PromoMail($promo));

            return response()->json([
                "status" => "success",
                "message" => "Promotional Email Sent Successfully"
            ]);
        }else{
            return response()->json([
                "status" => "error",
                "message" => "Invalid Credentials"
            ]);
        }
    }
}
