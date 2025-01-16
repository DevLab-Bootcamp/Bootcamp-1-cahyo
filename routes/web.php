<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ObatController;






Route::get('login', [AuthenticationController::class, 'index'])->name('login');
Route::resource('users', UserController::class);
Route::resource('clinics', ClinicController::class);
Route::resource('obat', ObatController::class);



// Route::post('login', [AuthenticationController::class, 'login']);
// Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');
