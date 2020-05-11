<?php


namespace App\Http\ViewComposers;


use App\Models\Article;
use App\Models\Links;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class FooterComposer
{
    public function compose(View $view)
    {
        $links = Links::spectacle()->get();
        $view->with(compact('links'));
    }

}