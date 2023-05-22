<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\SubmitController;

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

//Submits user information:
Route::post('/submit-form', [FormController::class, 'submitForm']);

//User-Agent:
Route::post('/process-request', [UserController::class, 'processRequest']);

//JSON Response:
Route::get('/response', [JsonController::class, 'jsonResponse']);

//Upload-File:
Route::post('/upload', [UploadController::class, 'handleUpload']);

//Retrieve-Cookies:
Route::get('/retrieve-cookie', [ManageController::class, 'retrieveRememberToken']);

//Submit:
Route::post('/submit', [SubmitController::class, 'submit']);

