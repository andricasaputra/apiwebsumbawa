<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/hero', [HeroController::class, 'index'])->name('hero');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');