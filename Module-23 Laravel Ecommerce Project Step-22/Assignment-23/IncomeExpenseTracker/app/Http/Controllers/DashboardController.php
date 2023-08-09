<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard Functions:
    function DashboardPage():View{
        return view('pages.dashboard.dashboard-page');
    }
}
