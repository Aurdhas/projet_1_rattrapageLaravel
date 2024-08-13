<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('/profile', function () {return view('auth.profile');})->name('profile');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::put('/profile', [AuthController::class, 'update'])->name('update');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'login'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('posts', \App\Http\Controllers\PostController::class);

