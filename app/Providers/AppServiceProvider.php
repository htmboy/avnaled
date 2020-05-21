<?php

namespace App\Providers;

use App\Http\ViewComposers\AvnaledFooterComposer;
use App\Http\ViewComposers\AvnaledHeaderComposer;
use App\Http\ViewComposers\AvnaledLeftbarComposer;
use App\Http\ViewComposers\AvnaledRecommendComposer;
use App\Http\ViewComposers\PokFooterComposer;
use App\Http\ViewComposers\PokHeaderComposer;
use App\Http\ViewComposers\PokRecommendComposer;
use App\Http\ViewComposers\PokRecommendProductComposer;
use App\Http\ViewComposers\PokSidebarShowComposer;
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
        View::composer('avnaled.common.header', AvnaledHeaderComposer::class);

        View::composer(['avnaled.common.footer', 'pok.common.footer'], AvnaledFooterComposer::class);

        View::composer('avnaled.common.leftBar', AvnaledLeftbarComposer::class);

        View::composer('avnaled.common.recommended', AvnaledRecommendComposer::class);

        View::composer('pok.common.header', PokHeaderComposer::class);

        View::composer('pok.common.recommendedProduct', PokRecommendProductComposer::class);

        View::composer('pok.common.recommended', PokRecommendComposer::class);

        View::composer('pok.common.sidebarShow', PokSidebarShowComposer::class);

    }
}
