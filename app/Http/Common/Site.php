<?php


namespace App\Http\Common;


class Site
{
    const AVNALED = 1;
    const POK = 2;

    public static $typeMap = [
        self::AVNALED => 'avnaled.com',
        self::POK => 'pok.com'
    ];
}