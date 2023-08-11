<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function IncomePage(){
        return view('pages.dashboard.income-page');
    }
    // CRUD Operations:
    // Create:
    function IncomeCreate(Request $request){
        $user_id = $request->header('id');
        return Income::create([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'category' => $request->input('category'),
            'payment_method' => $request->input('payment_method'),
            'user_id' => $user_id
        ]);
    }
    // Read:
    function IncomeList(Request $request){
        $user_id = $request->header('id');
        return Income::where('user_id', $user_id)->get();
    }
    // Update:
    function IncomeUpdate(Request $request){
        $income_id= $request->input('id');
        $user_id= $request->header('id');
        return Income::where('id', $income_id)->where('user_id', $user_id)->update([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'category' => $request->input('category'),
            'payment_method' => $request->input('payment_method')
        ]);
    }
    function IncomeByID(Request $request){
        $income_id= $request->input('id');
        $user_id= $request->header('id');
        return Income::where('id', $income_id)->where('user_id', $user_id)->first();
    }
    // Delete:
    function IncomeDelete(Request $request){
        $income_id= $request->input('id');
        $user_id= $request->header('id');
        return Income::where('id', $income_id)->where('user_id', $user_id)->delete();
    }
}
