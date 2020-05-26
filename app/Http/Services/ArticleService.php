<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午8:52
 */

namespace App\Http\Services;


use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;


interface ArticleService
{
    public function queryLimit(int $domain, int $limit, int $map_id = null):Collection;

    public function queryAll(int $domain, int $limit): Collection;

    public function queryPaginate(int $map_id, int $domain, int $page):LengthAwarePaginator;

    public function querySearch($word, $page, $domain):LengthAwarePaginator;
}