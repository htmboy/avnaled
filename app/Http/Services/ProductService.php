<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午8:41
 */

namespace App\Http\Services;


use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ProductService
{
    public function queryLimit(Array $map_id, int $limit): Collection;

    public function queryPaginate(Array $cat_id, int $limit):LengthAwarePaginator;

}