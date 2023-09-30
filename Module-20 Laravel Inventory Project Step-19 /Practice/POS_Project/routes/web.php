<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
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
// Category Routes:
Route::post('/create-category',[CategoryController::class, 'CategoryCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/list-category',[CategoryController::class, 'CategoryList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-category',[CategoryController::class, 'CategoryUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-category',[CategoryController::class, 'CategoryDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-by-id',[CategoryController::class, 'CategoryByID'])->middleware([TokenVerificationMiddleware::class]);
// Customer Routes:
Route::post('/create-customer',[CustomerController::class, 'CustomerCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/list-customer',[CustomerController::class, 'CustomerList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-customer',[CustomerController::class, 'CustomerUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-customer',[CustomerController::class, 'CustomerDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-by-id',[CustomerController::class, 'CustomerByID'])->middleware([TokenVerificationMiddleware::class]);
// Product Routes:
Route::post('/create-product',[ProductController::class, 'ProductCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/list-product',[ProductController::class, 'ProductList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-product',[ProductController::class, 'ProductUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-product',[ProductController::class, 'ProductDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/product-by-id',[ProductController::class, 'ProductByID'])->middleware([TokenVerificationMiddleware::class]);
// Invoice Routes:
Route::post('/create-invoice',[InvoiceController::class, 'InvoiceCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/select-invoice',[InvoiceController::class, 'InvoiceSelect'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/details-invoice',[InvoiceController::class, 'InvoiceDetails'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-invoice',[InvoiceController::class, 'InvoiceDelete'])->middleware([TokenVerificationMiddleware::class]);
// Summary & Report Routes:
Route::get('/summary',[DashboardController::class, 'Summary'])->middleware([TokenVerificationMiddleware::class]);


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
Route::get('/categoryPage',[CategoryController::class, 'CategoryPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/customerPage',[CustomerController::class, 'CustomerPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/productPage',[ProductController::class, 'ProductPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/invoicePage',[InvoiceController::class, 'InvoicePage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/salePage',[InvoiceController::class, 'SalePage'])->middleware([TokenVerificationMiddleware::class]);
