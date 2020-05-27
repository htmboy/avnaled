<?php


namespace App\Http\Services\Implement;


use App\Common\DomainConfig;
use App\Http\Services\SearchWordService;
use App\Models\SearchWord;
use Illuminate\Database\Eloquent\Collection;

class SearchWordServiceImpl implements SearchWordService
{

    public function queryAll(int $domain, int $limit): Collection
    {
        return SearchWord::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])->orderByDesc('sort')->limit($limit)->get();
    }
}