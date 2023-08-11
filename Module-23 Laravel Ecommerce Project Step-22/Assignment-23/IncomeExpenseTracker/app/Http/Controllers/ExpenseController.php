<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function ExpensePage(){
        return view('pages.dashboard.expense-page');
    }
    // CRUD Operations:
    // Create:
    function ExpenseCreate(Request $request){
        $user_id = $request->header('id');
        return Expense::create([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'category' => $request->input('category'),
            'payment_method' => $request->input('payment_method'),
            'user_id' => $user_id
        ]);
    }
    // Read:
    function ExpenseList(Request $request){
        $user_id = $request->header('id');
        return Expense::where('user_id', $user_id)->get();
    }
    // Update:
    function ExpenseUpdate(Request $request){
        $expense_id= $request->input('id');
        $user_id= $request->header('id');
        return Expense::where('id', $expense_id)->where('user_id', $user_id)->update([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'category' => $request->input('category'),
            'payment_method' => $request->input('payment_method')
        ]);
    }
    function ExpenseByID(Request $request){
        $expense_id= $request->input('id');
        $user_id= $request->header('id');
        return Expense::where('id', $expense_id)->where('user_id', $user_id)->first();
    }
    // Delete:
    function ExpenseDelete(Request $request){
        $expense_id= $request->input('id');
        $user_id= $request->header('id');
        return Expense::where('id', $expense_id)->where('user_id', $user_id)->delete();
    }
}
