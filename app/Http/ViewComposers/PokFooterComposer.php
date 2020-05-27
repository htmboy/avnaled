<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Http\Services\Implement\LinkServiceImpl;
use Illuminate\View\View;

class PokFooterComposer
{
    public function compose(View $view)
    {
        $links = (new LinkServiceImpl)->queryAll(DomainConfig::DOMAIN_AVNALED);

        $view->with(compact('links'));
    }

}