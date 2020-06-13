<?php

namespace App\Http\Controllers\Pok;

use App\Common\DomainConfig;
use App\Models\Config;
use App\Models\ProductCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $SEOConfig;
    protected $domain;
    protected $productType;

    public function __construct(Request $request)
    {

        $this->SEOConfig = json_decode(Config::where('key', 'seo.pok')->first()->value, true);
        $this->domain = DomainConfig::DOMAIN_POK;
        $this->productType = ProductCategory::PRODUCT_FLOODLIGHT;

        Log::channel('poklog')->info(
            $request->getClientIp()
            . "\t"
            . ($request->header('referer')?:null)
            . "\t"
            . $request->getHttpHost().$request->getRequestUri()
        );
    }

}

