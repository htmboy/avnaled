<?php

namespace App\Models;

use App\Common\DomainConfig;
use App\Common\GlobalConfiguration;
use App\Models\Scopes\SpectacleScope;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use phpDocumentor\Reflection\Types\Self_;

class Article extends BaseModel
{

    protected $table = 'aoo_article';

    const ARTICLE_CASES = 1;
    const ARTICLE_COMPANY_NEWS = 2;
    const ARTICLE_INDUSTRY_NEWS = 3;
    const ARTICLE_Q_AND_A = 4;

    public static $articleMap = [
        self::ARTICLE_CASES => '客户案例',
        self::ARTICLE_COMPANY_NEWS => '公司动态',
        self::ARTICLE_INDUSTRY_NEWS => '行业新闻',
        self::ARTICLE_Q_AND_A => '问与答'
    ];

    public static function getCategoryMap($category = null){
        if($category)
            return self::$articleMap[$category];
        return self::$articleMap;
    }

    public function scopePok($query){
        return $query->where('domain_id', DomainConfig::DOMAIN_POK);
    }

    public function previousItem()
    {

        return self::select(['title', 'id', 'map_id', 'sort'])->where([
            ['domain_id', $this->domain_id],
            ['is_show', 1],
            ['map_id', '=', $this->map_id],
            ['sort', '<', $this->sort],
        ])->orderByDesc('sort')->first();
    }

    public function nextItem()
    {
        return self::select(['title', 'id', 'map_id', 'sort'])->where([
            ['domain_id', $this->domain_id],
            ['is_show', 1],
            ['map_id', '=', $this->map_id],
            ['sort', '>', $this->sort],
        ])->orderBy('sort')->first();
    }
    
}
