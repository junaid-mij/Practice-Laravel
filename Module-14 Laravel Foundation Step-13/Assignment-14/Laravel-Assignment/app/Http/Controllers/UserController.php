<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function processRequest(Request $request): string
    {
        $userAgent = $request->header('User-Agent');

        return $userAgent;
    }
}
