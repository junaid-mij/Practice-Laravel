<?php

use App\Http\Controllers\DemoController;
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

Route::get('/SessionPut/{email}', [DemoController::class,'SessionPut']);
Route::get('/SessionPull', [DemoController::class,'SessionPull']);
Route::get('/SessionGet', [DemoController::class,'SessionGet']);
Route::get('/SessionForget', [DemoController::class,'SessionForget']);
Route::get('/SessionFlush', [DemoController::class,'SessionFlush']);
