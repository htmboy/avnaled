<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table = 'avna_product';

    const TYPE_GONGKUANGDENG = 1;
    const TYPE_FANGUANGDENG = 2;
    const TYPE_TOUGUANGDENG = 3;

    public static $typeMap = [
        'gongkuangdeng' => self::TYPE_GONGKUANGDENG,
        'fanguangdeng' =>self::TYPE_FANGUANGDENG,
        'touguangdeng' =>self::TYPE_TOUGUANGDENG,
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'cat_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany('App\Models\ProductGallery', 'pro_id', 'id');
    }

    public function scopeSpectacle($query)
    {
        return $query->where('is_show', '1')->orderBy('sort', 'desc');
    }
}
