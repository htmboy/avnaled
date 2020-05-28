<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Http\Services\Implement\LinkServiceImpl;
use App\Models\Config;
use Illuminate\View\View;

class PokFooterComposer
{
    public function compose(View $view)
    {
        $settings = json_decode(Config::where('key', 'setting')->first()->value, true);

        $links = (new LinkServiceImpl)->queryAll(DomainConfig::DOMAIN_AVNALED);

        $view->with(compact('links', 'settings'));
    }

}