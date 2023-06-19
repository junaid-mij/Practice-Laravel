<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):string
    {
        return "Success";
    }
    function DemoAction2(Request $request):string
    {
        return "Fail";
    }
}
