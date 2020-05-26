<?php

namespace App\Models;


class ThemePoster extends BaseModel
{
    protected $table = 'aoo_theme_poster';

//    const TYPE_ALL = 0;
    const TYPE_PRODUCT = 1;
    const TYPE_ARTICLE = 2;

    public static function getTypeMap()
    {
        return [
//            self::TYPE_ALL => '所有主题',
            self::TYPE_ARTICLE => '新闻',
            self::TYPE_PRODUCT => '产品'
        ];
    }
}
