<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard Functions:
    function DashboardPage(): View
    {
        return view('pages.dashboard.dashboard-page');
    }
    // Total Income:
    public function getTotalIncome(Request $request){
        try{
            $user_id = $request->header('id');
            $totalIncome = Income::where('user_id', $user_id)->sum('amount');
            return response()->json(['total_income' => $totalIncome]);
        }
        catch(Exception $e){
            return response()->json([
                "status" => "error",
                "message" => "Something Went Wrong!"
            ]);
        }
    }
    // Total Expense
    public function getTotalExpenses(Request $request)
    {
        try {
            $user_id = $request->header('id');
            $totalExpenses = Expense::where('user_id', $user_id)->sum('amount');
            return response()->json(['total_expenses' => $totalExpenses]);
        } catch (Exception $e) {
            return response()->json([
                "status" => "error",
                "message" => "Something Went Wrong!"
            ]);
        }
    }
    // NetIncome:
    public function getNetIncome(Request $request)
    {
        try {
            $user_id = $request->header('id');
            $totalIncome = Income::where('user_id', $user_id)->sum('amount');
            $totalExpenses = Expense::where('user_id', $user_id)->sum('amount');
            $netIncome = $totalIncome - $totalExpenses;
            return response()->json(['net_income' => $netIncome]);
        } catch (Exception $e) {
            return response()->json([
                "status" => "error",
                "message" => "Something Went Wrong!"
            ]);
        }
    }
}
