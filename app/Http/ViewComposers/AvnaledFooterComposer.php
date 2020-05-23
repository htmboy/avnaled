<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Link;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledFooterComposer
{
    public function compose(View $view)
    {
        $links = Link::spectacle()->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, DomainConfig::DOMAIN_AVNALED])->get();
        $productMap = Product::getCategoryMap(ProductCategory::PRODUCT_HIGH_BAY_LIGHT);
        $case_id = Article::ARTICLE_CASES;
        $QA_id = Article::ARTICLE_Q_AND_A;
        $company_id = Article::ARTICLE_COMPANY_NEWS;
        $view->with(compact(
            'links', 'productMap', 'case_id', 'QA_id', 'company_id'
        ));
    }

}