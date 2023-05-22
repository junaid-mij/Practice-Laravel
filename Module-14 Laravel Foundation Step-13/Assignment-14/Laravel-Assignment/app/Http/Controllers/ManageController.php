<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function retrieveRememberToken(Request $request): array|string|null
    {
        $rememberToken = $request->cookie('remember_token', null);

        return response()->json(['rememberToken' => $rememberToken]);
    }
}
