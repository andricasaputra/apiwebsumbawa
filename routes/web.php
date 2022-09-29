<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('reset');

