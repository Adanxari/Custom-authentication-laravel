<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Register Page Routes
Route::get('register', [RegisterController::class,'register']);
Route::post('register', [RegisterController::class,'store'])->name('register');


//Login Routes
Route::get('login', [LoginController::class,'login']);
Route::post('login', [LoginController::class,'store'])->name('login');
Route::get('logout', [LoginController::class,'logout'])->name('logout');
Route::get('home', [LoginController::class,'home'])->name('home');


//Forget Password Routes
Route::get('forget-password', [ForgotPasswordController::class,'getEmail']);
Route::post('forget-password', [ForgotPasswordController::class,'postEmail']);

//Reset Password Routes
Route::get('reset-password/{token}', [ResetPasswordController::class,'getPassword']);
Route::post('reset-password', [ResetPasswordController::class,'updatePassword']);




