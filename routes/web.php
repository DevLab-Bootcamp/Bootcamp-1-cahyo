<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ObatController;

Route::resource('users', UserController::class);
Route::resource('clinics', ClinicController::class);
Route::resource('obat', ObatController::class)->parameters([
    'obat' => 'drugs',
]);

Route::view('/', 'dashboard');
Route::view('/auth', 'template.auth');
Route::view('/main', 'template.main');
Route::view('/auth-login', 'auth.login');
Route::view('/auth-register', 'auth.register');

Route::post('login', [AuthenticationController::class, 'login'])->name('auth.login');
Route::get('login', [DashboardController::class, 'index'])->name('dashboard.index');


