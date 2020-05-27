<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Http\Services\Implement\SearchWordServiceImpl;
use Illuminate\View\View;

class AvnaledSearchComposer
{
    public function compose(View $view)
    {
        $words = (new SearchWordServiceImpl)->queryAll(DomainConfig::DOMAIN_AVNALED, 6);

        $view->with(compact('words'));
    }

}