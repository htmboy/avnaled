<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午9:29
 */

namespace App\Http\Services;


use App\Models\ThemePoster;

interface ThemePosterService
{
    public function queryOne(int $type, int $map_id, int $domain):ThemePoster;
}