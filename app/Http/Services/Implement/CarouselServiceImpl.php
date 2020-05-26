<?php


namespace App\Http\Services\Implement;


use App\Common\DomainConfig;
use App\Http\Services\CarouselService;
use App\Models\Carousel;
use Illuminate\Database\Eloquent\Collection;

class CarouselServiceImpl implements CarouselService
{

    public function queryAll(int $domain): Collection
    {
        return Carousel::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])
            ->orderByDesc('sort')->get(['id', 'title', 'alt', 'site', 'link']);
    }
}