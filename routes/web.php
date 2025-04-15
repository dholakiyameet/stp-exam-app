<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Middleware\AuthCheckMiddelware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(AuthCheckMiddelware::class)->name('dashboard');

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/login', [AuthController::class, 'show_login'])->name('show_login');
Route::post('/login-submit', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'show_register'])->name('show_register');
Route::post('/register-submit', [AuthController::class, 'register'])->name('register');

// Route::get('/register', function () {
//     return view('auth.register');
// });