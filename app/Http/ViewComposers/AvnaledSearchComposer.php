<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Models\SearchWord;
use Illuminate\View\View;

class AvnaledSearchComposer
{
    public function compose(View $view)
    {
        $words = SearchWord::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->limit(6)->get();
        $view->with(compact('words'));

    }

}