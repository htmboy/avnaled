<?php


namespace App\Http\Common;


class Site
{
    const ALL = 0;
    const AVNALED = 1;
    const POK = 2;

    public static $typeMap = [
        self::ALL => '*.com',
        self::AVNALED => 'avnaled.com',
        self::POK => 'pok.com'
    ];
}