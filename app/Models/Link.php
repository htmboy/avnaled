<?php

namespace App\Models;

use App\Common\DomainConfig;
use App\Common\GlobalConfiguration;
use Illuminate\Database\Eloquent\Model;

class Link extends BaseModel
{
    protected $table = 'aoo_link';

    public static function getDomainMap()
    {
        return DomainConfig::$domainMap;
    }
}
