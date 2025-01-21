<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'dashboard');




Route::view('/admin', 'kelolaAdmin');

Route::get('/admin/createAdmin', [AdminController::class, 'createAdmin'])->name('admin.createAdmin');

Route::view('/icd', 'icd')-> name('icd');

Route::get('/admin/createICD', [AdminController::class, 'createICD'])->name('admin.createICD');

Route::view('/klinik', 'klinik')-> name('klinik');

Route::get('/admin/createKlinik', [AdminController::class, 'createKlinik'])->name('admin.createKlinik');


Route::view('/auth', 'template.auth');
Route::view('/main', 'template.main');
Route::view('/auth-login', 'auth.login');
Route::view('/auth-register', 'auth.register');



Route::post('login', [AuthenticationController::class, 'login'])->name('auth.login');
Route::get('login', [DashboardController::class, 'index'])->name('dashboard.index');

