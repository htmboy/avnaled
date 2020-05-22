<?php

namespace App\Models;

use App\Common\GlobalConfiguration;
use App\Models\Scopes\SpectacleScope;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends BaseModel
{

    protected $table = 'aoo_article';

    public static function category(){
        return GlobalConfiguration::$articleMap;
    }

    public function scopePok($query){
        return $query->where('domain_id', GlobalConfiguration::DOMAIN_POK);
    }

    public function previousItem()
    {

        return self::select(['title', 'id', 'cat_id', 'sort'])->where([
            ['is_show', 1],
            ['cat_id', '=', $this->cat_id],
            ['sort', '<', $this->sort],
        ])->orderByDesc('sort')->first();
    }

    public function nextItem()
    {
        return self::select(['title', 'id', 'cat_id', 'sort'])->where([
            ['is_show', 1],
            ['cat_id', '=', $this->cat_id],
            ['sort', '>', $this->sort],
        ])->orderBy('sort')->first();
    }
    
}
