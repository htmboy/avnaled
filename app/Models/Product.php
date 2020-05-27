<?php

namespace App\Models;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table = 'aoo_product';

    public static function getCategoryMap($id = null){
        return ProductCategory::when($id, function ($query, $id) {
            return $query->where('map_id', $id);
        })->get(['id', 'name'])->keyBy('id')->map(function ($item) {
            return $item->name;
        });
    }


    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'cat_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany('App\Models\ProductGallery', 'pro_id', 'id');
    }

    public function previousItem()
    {

        return self::select(['title', 'id'])->where([
            ['is_show', 1],
            ['cat_id', '=', $this->cat_id],
            ['sort', '<', $this->sort],
        ])->orderByDesc('sort')->first();
    }

    public function nextItem()
    {
        return self::select(['title', 'id'])->where([
            ['is_show', 1],
            ['cat_id', '=', $this->cat_id],
            ['sort', '>', $this->sort],
        ])->orderBy('sort')->first();
    }
}
