<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function submit(Request $request)
    {
        $email = $request->input('email');

        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully.'
        ]);
    }
}
