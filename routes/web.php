<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MessageController;
use App\Http\Middleware\CheckRole;

Route::get('/', [HomeController::class, "Home"])->middleware('checkRole')->name('home');

Route::get('/login', [AuthController::class, "Login"])->name('login');
Route::post('/login', [AuthController::class, "LoginPost"])->name('login.post');

Route::get('/register', [AuthController::class, "Register"])->name('register');
Route::post('/register', [AuthController::class, "RegisterPost"])->name('register.post');

Route::get('/adminpage', [HomeController::class, "AdminPage"])->name("adminpage");
Route::get('/userpage', [HomeController::class, "UserPage"])->name("userpage");

Route::get('/logout', [AuthController::class, "Logout"])->name("logout");

Route::get('/manageusers', [HomeController::class, "ManageUsers"])->name('manageusers');

Route::get('/update/{id}', [AuthController::class, "Edit"]);
Route::post('/update/{id}', [AuthController::class, "Update"]);

Route::get('/delete/{id}', [AuthController::class, "Delete"]);

Route::get('/product', [HomeController::class, "ProductPage"])->name('product');

Route::get('/addproduct', [HomeController::class, "AddProduct"]);
Route::post('/addproduct', [ProductController::class, "AddProduct"]);

Route::get('/dashboard', [HomeController::class, "Dashboard"]);

Route::get('/announcement', [HomeController::class, "Announcement"]);
Route::post('/announcement', [UsersController::class, "Announcement"]);

Route::get('/messages', [HomeController::class, "Messages"]);

Route::get('/myprofile/{id}', [AuthController::class, "MyProfile"]);
Route::post('/myprofile/{id}', [AuthController::class, "UpdateProfile"]);

Route::get('/messages', [MessageController::class, "MessagePage"]);

Route::get('/sendmessage', [MessageController::class, "Message"]);
Route::post('/sendmessage', [MessageController::class, "SendMessage"]);





