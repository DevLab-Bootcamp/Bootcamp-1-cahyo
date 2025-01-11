<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('login',[AuthenticationController::class,'loginProcess'])->name('auth.login-process');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');