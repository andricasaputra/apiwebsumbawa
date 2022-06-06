<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use App\Contracts\UplaodContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setUploadClass();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
    }

    protected function setUploadClass()
    {
        $this->app->bind(UplaodContract::class, function($app){
            if (request()->is('api/articles') || request()->is('api/articles/*')) {
                return new \App\Upload\ArticleUpload;
            } elseif(request()->is('api/headlines') || request()->is('api/headlines/*')) {
                return new \App\Upload\HeadlineUpload;
            }
        });
    }
}
