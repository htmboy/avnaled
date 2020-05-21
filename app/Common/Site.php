<?php


namespace App\Http\Common;


class GlobalConfiguration
{
    const DOMAIN_ALL = 0;
    const DOMAIN_AVNALED = 1;
    const DOMAIN_POK = 2;

    const PRODUCT_HIGH_BAY_LIGHT = 1;
    const PRODUCT_FLOODLIGHT= 2;

    const ARTICLE_CASES = 1;
    const ARTICLE_COMPANY_NEWS = 2;
    const ARTICLE_INDUSTRY_NEWS = 3;
    const ARTICLE_Q_AND_A = 4;

    public static $domainMap = [
        self::DOMAIN_ALL => '*.com',
        self::DOMAIN_AVNALED => 'avnaled.com',
        self::DOMAIN_POK => 'pok.com'
    ];

    public static $productMap = [
        self::PRODUCT_HIGH_BAY_LIGHT => '工矿灯',
        self::PRODUCT_FLOODLIGHT => '泛光灯'
    ];

    public static $articleMap = [
        self::ARTICLE_CASES => '客户案例',
        self::ARTICLE_COMPANY_NEWS => '公司动态',
        self::ARTICLE_INDUSTRY_NEWS => '行业新闻',
        self::ARTICLE_Q_AND_A => '问与答'
    ];
}