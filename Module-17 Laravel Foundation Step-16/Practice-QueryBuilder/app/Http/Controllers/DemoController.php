<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoFunction(Request $request)
    {
        $result = DB::table('brands')
        ->where('id','=',$request->id)
        ->update($request->input());
        return $result;
    }
}
