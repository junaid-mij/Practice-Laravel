<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    function UserRegistration(Request $request){
        try{
            User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password'),
            ]);

            return response()->json([
                "status" => "success",
                "message" => "User Created Successfully"
            ]);
        }catch(Exception $e){
            return response()->json([
                "status" => "error",
                "message" => $e->getMessage()
            ]);
        };
    }
    function UserLogin(Request $request){
        $count = User::where('email', $request->input('email'))
            ->where('password', $request->input('password'))
            ->count();

        if($count==1){
            // User login-> JWT token Issue
            $token = JWTToken::CreateToken($request->input('email'));

            return response()->json([
                "status" => "success",
                "message" => "User Login Successfully",
                "token" => $token
            ]);
        }else{
            return response()->json([
                "status" => "error",
                "message" => "Invalid Credentials"
            ],401);
        }
    }
    function SendOTPCode(Request $request){
        // Taking email from input field:
        $email = $request->input('email');
        // Generating OTP:
        $otp = rand(1000,9999);
        // Checking the email is valid or not:
        $count = User::where('email', $email)->count();

        // Condition:
        if($count==1){
            // Send OTP to the email:
            Mail::to($email)->send(new OTPMail($otp));

            // Store OTP in Database:
            User::where('email','=', $email)->update([
                'otp' => $otp
            ]);

            return response()->json([
                "status" => "success",
                "message" => "OTP Sent Successfully"
            ]);
        }else{
            return response()->json([
                "status" => "error",
                "message" => "Invalid Credentials"
            ],401);
        }

    }
    function VerifyOTP(Request $request){
        // Taking Input:
        $email = $request->input('email');
        $otp = $request->input('otp');

        // Checking the input is it valid or not:
        $count = User::where('email','=', $email)
                    ->where('otp','=', $otp)
                    ->count();

        // Condition:
        if($count==1){
            // Database OTP Update:
            User::where('email','=', $email)->update(['otp' => '0']);

            // Pass Reset Token Issue:
            $token = JWTToken::CreateTokenForSetPassword($request->input('email'));
            return response()->json([
                "status" => "success",
                "message" => "OTP Verified Successfully",
                "token" => $token
            ]);
        }else{
            return response()->json([
                "status" => "error",
                "message" => "Invalid Credentials"
            ],401);
        }
    }
    function ResetPassword(Request $request){
        try{
            $email = $request->header('email');
            $password = $request->input('password');

            User::where('email','=', $email)->update(['password'=>$password]);

            return response()->json([
                "status" => "success",
                "message" => "Password Reset Successfully"
            ]);
        }catch(Exception $e){
            return response()->json([
                "status" => "error",
                "message" => $e->getMessage()
            ],401);
        }
    }
}
