<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SPP\AlurPelayananController;
use App\Http\Controllers\Api\SPP\DasarHukumController;
use App\Http\Controllers\Api\SPP\InfoPelayananPengaduanController;
use App\Http\Controllers\Api\SPP\JamPelayananController;
use App\Http\Controllers\Api\SPP\MaklumatPelayananController;
use App\Http\Controllers\Api\SPP\ProdukPelayananController;
use App\Http\Controllers\Api\SPP\StandarWaktuController;

Route::resource('alur', AlurPelayananController::class)->except(['create', 'edit']);

Route::resource('dasar', DasarHukumController::class)->except(['create', 'edit']);

Route::resource('info', InfoPelayananPengaduanController::class)->except(['create', 'edit']);

Route::resource('jam', JamPelayananController::class)->except(['create', 'edit']);

Route::resource('maklumat', MaklumatPelayananController::class)->except(['create', 'edit']);

Route::resource('produk', ProdukPelayananController::class)->except(['create', 'edit']);

Route::resource('standar', StandarWaktuController::class)->except(['create', 'edit']);