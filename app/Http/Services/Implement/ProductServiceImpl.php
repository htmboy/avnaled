<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午8:42
 */

namespace App\Http\Services\Implement;


use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductServiceImpl implements ProductService
{

    public function queryLimit(array $cat_id, int $limit): Collection
    {
        return Product::where('is_show', 1)->whereIn('cat_id', $cat_id)
            ->orderByDesc('cat_sort')->limit($limit)->get();
    }

    public function queryPaginate(array $cat_id, int $limit): LengthAwarePaginator
    {
        return Product::where('is_show', 1)->whereIn('cat_id', $cat_id)->orderByDesc('cat_sort')->paginate($limit);
    }

    public function queryAllPaginate(int $limit): LengthAwarePaginator
    {
        return Product::where('is_show', 1)->orderByDesc('cat_sort')->paginate($limit);
    }
}