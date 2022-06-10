<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\HeadlineController;

// Article resource
Route::get('articles/latest', [ArticleController::class, 'latest']);
Route::resource('articles', ArticleController::class)->except(['create', 'edit']);

// Headline resource
Route::resource('headlines', HeadlineController::class)->except(['create', 'edit']);



