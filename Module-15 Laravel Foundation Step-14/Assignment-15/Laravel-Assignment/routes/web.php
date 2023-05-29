<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

//Task 2: Request Redirect
Route::get('/home', function () {
    return redirect('/dashboard');
});

//Task 4: Route Middleware
Route::group(['middleware' => 'auth'], function () {
    // Routes for authenticated users
    Route::get('/profile', ProfileController::class,'index');
    Route::get('/settings', SettingsController::class,'index');
});

