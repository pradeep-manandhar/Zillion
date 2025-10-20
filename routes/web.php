<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Authentication
Route::get('/login',[AuthController::class,'showLogin']);
Route::get('/register',[AuthController::class,'showRegister']);

//Products
Route::get('/products',[ProductController::class,'index'])->name('home');
