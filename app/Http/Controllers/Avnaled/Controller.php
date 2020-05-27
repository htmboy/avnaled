<?php

namespace App\Http\Controllers\Avnaled;

use App\Common\DomainConfig;
use App\Models\Config;
use App\Models\ProductCategory;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $SEOConfig;
    protected $domain;
    protected $productType;

    public function __construct()
    {
        $this->SEOConfig = json_decode(Config::where('key', 'seo.avnaled')->first()->value, true);
        $this->domain = DomainConfig::DOMAIN_AVNALED;
        $this->productType = ProductCategory::PRODUCT_HIGH_BAY_LIGHT;
    }

}

