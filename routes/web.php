<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Authentication
Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login.post');
Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'store'])->name('register.store');

//Products
Route::get('/products',[ProductController::class,'index'])->name('home');

