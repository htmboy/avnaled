<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Link;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class PokFooterComposer
{
    public function compose(View $view)
    {
        $links = Link::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_POK])->get(['id', 'link', 'name']);
        $view->with(compact('links'));
    }

}