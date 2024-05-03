<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/user/login', [UserLoginController::class, "Userlogin"])->name("user.login");
Route::post('/user/login', [UserLoginController::class, "UserloginPost"])->name("user.login.post");

Route::get('/admin/login', [AdminLoginController::class, "Adminlogin"])->name("admin.login");
//Route::post('/admin/login', [AdminLoginController::class, "AdminLoginPost"])->name("admin.login.post");

Route::get('/user/signin', [UserRegisterController::class, "Usersignin"])->name("user.signin");
Route::post('/user/signin', [UserRegisterController::class, "UserSigninPost"])->name("user.signin.post");

Route::get('/admin/signin', [AdminRegisterController::class, "Adminsignin"])->name("admin.signin");
// Route::post('/admin/signin', [AdminRegisterController::class, "AdminSigninPost"])->name("admin.signin.post");


