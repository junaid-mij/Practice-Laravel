<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function myEndpoint(Request $request)
    {
        $page = $request->query('page', null);

        return response()->json(['page' => $page]);
    }
}
