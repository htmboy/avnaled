<?php

namespace App\Providers;

use App\Http\ViewComposers\FooterComposer;
use App\Http\ViewComposers\HeaderComposer;
use App\Http\ViewComposers\LeftbarComposer;
use App\Http\ViewComposers\RecommendComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('spectacle.common.header', HeaderComposer::class);

        View::composer('spectacle.common.footer', FooterComposer::class);

        View::composer('spectacle.common.leftBar', LeftbarComposer::class);

        View::composer('spectacle.common.recommended', RecommendComposer::class);

    }
}
