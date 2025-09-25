<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function UserLogin(Request $request):JsonResponse
    {
        try{
            $UserEmail=$request->UserEmail;
            $OTP= rand(100000, 999999);
            $details=['code' => $OTP];
            // Send OTP to the email:
            Mail::to($UserEmail)->send(new OTPMail($details));
            // Store OTP in Database:
            User::updateOrCreate(['email' => $UserEmail], ['email' => $UserEmail, 'otp'=>$OTP]);
            return ResponseHelper::out('success', 'A 6-digit OTP has been send to your email address', 200);

        }catch(Exception $e){
            return ResponseHelper::out('fail', $e->getMessage(), 200);
        }
    }

}
