<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'dashboard');
Route::view('/auth', 'template.auth');
Route::view('/main', 'template.main');
Route::view('/auth-login', 'auth.login');
Route::view('/auth-register', 'auth.register');

Route::post('login', [AuthenticationController::class, 'login'])->name('auth.login');
Route::get('login', [DashboardController::class, 'index'])->name('dashboard.index');
});
