<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //Session Put:
    function SessionPut(Request $request):bool
    {
        $email = $request->email;
        $request->session()->put('userEmail',$email);
        return true;
    }
    //Session Pull:
    function SessionPull(Request $request):string
    {
        return $request->session()->pull('userEmail','default');
    }
    //Session Get:
    function SessionGet(Request $request):string
    {
        return $request->session()->get('userEmail','default');
    }
    //Session Forget:
    function SessionForget(Request $request):bool
    {
        $request->session()->forget('userEmail');
        return true;
    }
    //Session Flush:
    function SessionFlush(Request $request):bool
    {
        $request->session()->flush();
        return true;
    }
}
