<?php


namespace App\Http\Services\Implement;


use App\Common\DomainConfig;
use App\Http\Services\LinkService;
use App\Models\Link;
use Illuminate\Database\Eloquent\Collection;

class LinkServiceImpl implements LinkService
{

    public function queryAll(int $domain): Collection
    {
        return Link::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])->get(['id', 'name', 'link']);
    }
}