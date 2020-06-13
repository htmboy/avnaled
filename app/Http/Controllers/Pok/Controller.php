<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Config;
use App\Models\ProductCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $SEOConfig;
    protected $domain;
    protected $productType;

    public function __construct()
    {

        $this->SEOConfig = json_decode(Config::where('key', 'seo.pok')->first()->value, true);
        $this->domain = DomainConfig::DOMAIN_POK;
        $this->productType = ProductCategory::PRODUCT_FLOODLIGHT;
    }

}

