<?php

use App\Http\Controllers\Api\About\ProfileController;
use App\Http\Controllers\Api\About\ProfilePimpinanController;
use App\Http\Controllers\Api\About\StructureController;
use App\Http\Controllers\Api\About\TupoksiController;
use App\Http\Controllers\Api\About\VisiMisiController;
use App\Http\Controllers\Api\About\WilayahLayananController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\HeadlineController;
use Illuminate\Support\Facades\Route;

// Article resource
Route::get('articles/latest', [ArticleController::class, 'latest']);
Route::apiResource('articles', ArticleController::class);

// Headline resource
Route::apiResource('headlines', HeadlineController::class);

Route::prefix('about')->group(function(){

	Route::apiResource('profile', ProfileController::class);
	Route::apiResource('visi_misi', VisiMisiController::class);
	Route::apiResource('struktur', StructureController::class);
	Route::apiResource('profile_pimpinan', ProfilePimpinanController::class);
	Route::apiResource('wilayah_layanan', WilayahLayananController::class);

});





