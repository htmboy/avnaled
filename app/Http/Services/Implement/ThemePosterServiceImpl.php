<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午9:32
 */

namespace App\Http\Services\Implement;


use App\Common\DomainConfig;
use App\Http\Services\ThemePosterService;
use App\Models\ThemePoster;

class ThemePosterServiceImpl implements ThemePosterService
{

    public function queryOne(int $type, int $map_id, int $domain): ThemePoster
    {
//        dd($type, $map_id, $domain);
        return ThemePoster::where([['is_show', 1], ['type', $type], ['type_id', $map_id]])
            ->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])->first()
            ??new ThemePoster();
    }
}