<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/register',[\App\Http\Controllers\UserController::class,'showRegister']);
Route::post('/register',[\App\Http\Controllers\UserController::class,'register']);
Route::middleware('auth')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'profile'])->name('profile');
    Route::post('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');
});
Route::get('/login',[\App\Http\Controllers\UserController::class,'showLogin']);
Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);
Route::get('/login',[\App\Http\Controllers\UserController::class,'showLogin'])->name('login');
Route::get('/register',[\App\Http\Controllers\UserController::class,'showRegister'])->name('register');

//研修画面
//ログイン画面
Route::get('/login_kensyu',[\App\Http\Controllers\LoginKensyuController::class,'loginKensyu']);
Route::get('/input_user_information_kensyu',[\App\Http\Controllers\UserRegisterKensyuController::class,'inputUserInformationKensyu']);
Route::post('/confirm_user_information_kensyu',[\App\Http\Controllers\UserRegisterKensyuController::class,'confirmUserInformationKensyu']);
Route::post('/regist_user_information_kensyu',[\App\Http\Controllers\UserRegisterKensyuController::class,'registUserInformationKensyu']);