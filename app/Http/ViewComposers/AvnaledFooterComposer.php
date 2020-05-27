<?php


namespace App\Http\ViewComposers;


use App\Common\DomainConfig;
use App\Http\Services\Implement\LinkServiceImpl;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AvnaledFooterComposer
{

    public function compose(View $view)
    {
        $links = (new LinkServiceImpl)->queryAll(DomainConfig::DOMAIN_AVNALED);

        $productMap = Product::getCategoryMap(ProductCategory::PRODUCT_HIGH_BAY_LIGHT);

        $case_id = Article::ARTICLE_CASES;

        $QA_id = Article::ARTICLE_Q_AND_A;

        $company_id = Article::ARTICLE_COMPANY_NEWS;

        $view->with(compact(
            'links', 'productMap', 'case_id', 'QA_id', 'company_id'
        ));
    }

}