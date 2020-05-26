<?php


namespace App\Common;


use phpDocumentor\Reflection\Types\Self_;

class DomainConfig
{
    const DOMAIN_ALL = 1;
    const DOMAIN_AVNALED = 2;
    const DOMAIN_POK = 3;

    public static $domainMap = [
        self::DOMAIN_ALL => '*.com',
        self::DOMAIN_AVNALED => 'avnaled.com',
        self::DOMAIN_POK => 'pok.com'
    ];

    public static function getDomainMap($domain = null)
    {
        if($domain)
            return self::$domainMap[$domain];
        return self::$domainMap;
    }


}