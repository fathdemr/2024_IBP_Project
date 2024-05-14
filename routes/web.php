<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;

Route::get('/', [HomeController::class, "Home"])->middleware('checkRole')->name('home');

Route::get('/login', [AuthController::class, "Login"])->name('login');
Route::post('/login', [AuthController::class, "LoginPost"])->name('login.post');

Route::get('/register', [AuthController::class, "Register"])->name('register');
Route::post('/register', [AuthController::class, "RegisterPost"])->name('register.post');

Route::get('/adminpage', [HomeController::class, "AdminPage"])->name("adminpage");
Route::get('/userpage', [HomeController::class, "UserPage"])->name("userpage");

Route::get('/logout', [AuthController::class, "Logout"])->name("logout");




