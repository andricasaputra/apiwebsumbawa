<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\UplaodContract;
use App\Http\Controllers\Api\HeadlineController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\SPP\AlurPelayananController;
use App\Http\Controllers\Api\SPP\DasarHukumController;
use App\Http\Controllers\Api\SPP\InfoPelayananPengaduanController;
use App\Http\Controllers\Api\SPP\JamPelayananController;
use App\Http\Controllers\Api\SPP\MaklumatPelayananController;
use App\Http\Controllers\Api\SPP\ProdukPelayananController;
use App\Http\Controllers\Api\SPP\StandarWaktuController;

class UploadImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->setUploadClass();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function setUploadClass()
    {
        $this->app->bind('upload', function($app){
            if (request()->is('api/articles') || request()->is('api/articles/*')) {
                return new \App\Upload\ArticleUpload;
            } elseif(request()->is('api/headlines') || request()->is('api/headlines/*')) {
                return new \App\Upload\HeadlineUpload;
            }
        });

        $this->app->bind('sppupload', function($app){
            return new \App\Upload\SPPUpload;
        });

        $this->app->when([
            HeadlineController::class,
            ArticleController::class,
            AlurPelayananController::class,
            DasarHukumController::class,
            InfoPelayananPengaduanController::class,
            JamPelayananController::class,
            MaklumatPelayananController::class,
            ProdukPelayananController::class,
            StandarWaktuController::class,
        ])
          ->needs(UplaodContract::class)
          ->give(function ($app) {
            if (request()->is('api/spp/*')) return $app->make('sppupload');
            return $app->make('upload');
        });
    }
}
