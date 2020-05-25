<?php

namespace App\Http\Controllers\Avnaled;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $SEOConfig;

    public function __construct()
    {
        $this->SEOConfig = (include_once app_path('Common/SEOConfig.php'))['avnaled'];
    }

}

