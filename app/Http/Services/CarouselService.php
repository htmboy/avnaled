<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午8:01
 */

namespace App\Http\Services;


use Illuminate\Database\Eloquent\Collection;

interface CarouselService
{
    // 按照域名id查询轮播图
    public function queryAll(int $domain):Collection;
}