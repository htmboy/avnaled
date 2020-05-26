<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午8:54
 */

namespace App\Http\Services\Implement;


use App\Common\DomainConfig;
use App\Http\Services\ArticleService;
use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleServiceImpl implements ArticleService
{
    private function query(int $map_id, int $domain): Builder
    {
        return Article::where([['is_show', 1], ['map_id', $map_id]])
            ->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])
            ->orderByDesc('sort');
    }

    public function queryLimit(int $domain, int $limit, int $map_id = null): Collection
    {
        return $map_id ?
            $this->query($map_id, $domain)->limit($limit)->get():
            Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])
                ->orderByDesc('sort')->limit($limit)->get();

    }

    public function queryPaginate(int $domain, int $page, int $map_id = null): LengthAwarePaginator
    {
        return $map_id ?
            $this->query($map_id, $domain)->paginate($page):
            Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])
        ->orderByDesc('cat_sort')->paginate($page);
    }

    public function queryAll(int $domain, int $limit): Collection
    {
        return Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])
            ->orderByDesc('cat_sort')->limit($limit)->get();
    }

    public function querySearch($word, $page, $domain): LengthAwarePaginator
    {
        return Article::where('is_show', 1)->whereIn('domain_id', [DomainConfig::DOMAIN_ALL, $domain])
            ->where('title', 'like', '%'.$word.'%')->orWhere('content', 'like', '%'.$word.'%')
            ->orderByDesc('cat_sort')->paginate($page);
    }
}