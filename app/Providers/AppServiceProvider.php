<?php

namespace App\Providers;

use App\Http\ViewComposers\AvnaledFooterComposer;
use App\Http\ViewComposers\AvnaledHeaderComposer;
use App\Http\ViewComposers\AvnaledLeftbarComposer;
use App\Http\ViewComposers\AvnaledRecommendComposer;
use App\Http\ViewComposers\PokHeaderComposer;
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

        View::composer('avnaled.common.footer', AvnaledFooterComposer::class);

        View::composer('avnaled.common.leftBar', AvnaledLeftbarComposer::class);

        View::composer('avnaled.common.recommended', AvnaledRecommendComposer::class);

        View::composer('pok.common.header', PokHeaderComposer::class);

    }
}
