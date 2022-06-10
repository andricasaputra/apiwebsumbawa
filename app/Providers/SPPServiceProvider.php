<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Contracts\SPPModelContract;
use App\Contracts\SPPRepositoryContract;
use App\Http\Controllers\Api\SPP\HomeSPPController;
use App\Http\Controllers\Api\SPP\AlurPelayananController;
use App\Http\Controllers\Api\SPP\DasarHukumController;
use App\Http\Controllers\Api\SPP\InfoPelayananPengaduanController;
use App\Http\Controllers\Api\SPP\JamPelayananController;
use App\Http\Controllers\Api\SPP\MaklumatPelayananController;
use App\Http\Controllers\Api\SPP\ProdukPelayananController;
use App\Http\Controllers\Api\SPP\StandarWaktuController;
use App\Repositories\SPP\AlurPelayananRepository;
use App\Repositories\SPP\DasarHukumRepository;
use App\Repositories\SPP\InfoPelayananPengaduanRepository;
use App\Repositories\SPP\JamPelayananRepository;
use App\Repositories\SPP\MaklumatPelayananRepository;
use App\Repositories\SPP\ProdukPelayananRepository;
use App\Repositories\SPP\StandarWaktuRepository;

class SPPServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->setSPPRepositoriesClass();
        $this->setSPPControllerClass();
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

    protected function setSPPControllerClass()
    {
        $this->app->when([
            HomeSPPController::class,
            AlurPelayananController::class,
            DasarHukumController::class,
            InfoPelayananPengaduanController::class,
            JamPelayananController::class,
            MaklumatPelayananController::class,
            ProdukPelayananController::class,
            StandarWaktuController::class,
        ])
          ->needs(SPPRepositoryContract::class)
          ->give(function ($app) {
              return $app->make('repo');
        });
    }

    protected function setSPPRepositoriesClass()
    {
        $this->app->bind('repo', function($app){

            if (request()->is('api/spp/alur') || request()->is('api/spp/alur/*')) {
                return new  AlurPelayananRepository;
            } elseif(request()->is('api/spp/dasar') || request()->is('api/spp/dasar/*')) {
               return new  DasarHukumRepository;
            } elseif(request()->is('api/spp/info') || request()->is('api/spp/info/*')) {
               return new  InfoPelayananPengaduanRepository;
            } elseif(request()->is('api/spp/jam') || request()->is('api/spp/jam/*')) {
               return new  JamPelayananRepository;
            } elseif(request()->is('api/spp/maklumat') || request()->is('api/spp/maklumat/*')) {
               return new  MaklumatPelayananRepository;
            } elseif(request()->is('api/spp/produk') || request()->is('api/spp/produk/*')) {
               return new  ProdukPelayananRepository;
            } elseif(request()->is('api/spp/standar') || request()->is('api/spp/standar/*')) {
               return new  StandarWaktuRepository;
            } elseif(request()->is('api/spp')) {
               return new  AlurPelayananRepository;
            }
        });
    }
}
