<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\GroupController;
use App\Http\Middleware\DemoMiddleware;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{key}',[DemoController::class,'DemoAction'])->middleware(DemoMiddleware::class);
Route::get('/fail',[DemoController::class,'DemoAction2']);


//MiddleWare Grouping:
Route::middleware('CheckRequestDetails')->group(function(){
    Route::get('/demo1/{key}',[GroupController::class,'DemoAction1']);
    Route::get('/demo2/{key}',[GroupController::class,'DemoAction2']);
    Route::get('/demo3/{key}',[GroupController::class,'DemoAction3']);
    Route::get('/demo4/{key}',[GroupController::class,'DemoAction4']);
});
