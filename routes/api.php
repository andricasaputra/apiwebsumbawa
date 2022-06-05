<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

// Article resource
Route::resource('articles', ArticleController::class)->except(['create', 'edit']);


