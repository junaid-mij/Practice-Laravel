<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoFunction()
    {
        $query1 = DB::table('products')->where('products.price','>',2000);
        $query2 = DB::table('products')->where('products.discount','=',1);

        return $query1;
    }
}
