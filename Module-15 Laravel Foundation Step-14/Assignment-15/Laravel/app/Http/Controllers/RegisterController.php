<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
    }

}
