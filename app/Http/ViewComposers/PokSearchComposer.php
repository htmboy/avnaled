<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Http\Services\Implement\SearchWordServiceImpl;
use App\Models\SearchWord;
use Illuminate\View\View;

class PokSearchComposer
{
    public function compose(View $view)
    {
        $words = (new SearchWordServiceImpl)->queryAll(DomainConfig::DOMAIN_POK, 6);

        $view->with(compact('words'));

    }

}