<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Default routes:
Route::get('/',[DashboardController::class, 'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);

/* WEB API Routes: */
//--------------------------------------------------------------------------
// Auth API:
Route::post('/user-registration',[UserController::class, 'UserRegistration']);
Route::post('/user-login',[UserController::class, 'UserLogin']);
Route::post('/send-otp',[UserController::class, 'SendOTPCode']);
Route::post('/verify-otp',[UserController::class, 'VerifyOTP']);
Route::post('/reset-password ',[UserController::class, 'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/user-profile ',[UserController::class, 'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update ',[UserController::class, 'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

/* Dashboard Routes: */


// User Logout:
Route::get('/logout',[UserController::class, 'UserLogout']);

//----------------------------------------------------------------

/* Page Routes: */
// Auth Route:
Route::get('/userLogin',[UserController::class, 'LoginPage']);
Route::get('/userRegistration',[UserController::class, 'RegistrationPage']);
Route::get('/sendOTP',[UserController::class, 'SendOTPPage']);
Route::get('/verifyOTP',[UserController::class, 'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class, 'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
// Dashboard Routes:
Route::get('/dashboard',[DashboardController::class, 'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile',[UserController::class, 'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);