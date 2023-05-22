<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $name = $request->input('name');

        return response()->json(['name' => value($name)]);
    }
}
