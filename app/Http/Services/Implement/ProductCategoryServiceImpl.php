<?php


namespace App\Http\Services\Implement;


use App\Http\Services\ProductCategoryService;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

class ProductCategoryServiceImpl implements ProductCategoryService
{

    public function queryAll(int $map_id = null): Collection
    {
        return $map_id ?
            ProductCategory::where('map_id', $map_id)->orderByDesc('sort')->get(['id', 'map_id', 'name']) :
            ProductCategory::orderByDesc('sort')->get(['id', 'map_id', 'name']);
    }
}