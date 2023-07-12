<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoFunction()
    {
        $query = DB::table('products')->where('price','>',1000);
        $query1 = DB::table('products')->where('category_id','=',3)->union($query)->get();
        return $query1;
    }
}
