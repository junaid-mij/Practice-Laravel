<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    function DemoAction1(Request $request):string
    {
        return "DemoAction1";
    }
    function DemoAction2(Request $request):string
    {
        return "DemoAction2";
    }
    function DemoAction3(Request $request):string
    {
        return "DemoAction3";
    }
    function DemoAction4(Request $request):string
    {
        return "DemoAction4";
    }
}
