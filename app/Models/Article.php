<?php

namespace App\Models;

use App\Models\Scopes\SpectacleScope;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends BaseModel
{
//    use Searchable;

    protected $table = 'avna_article';
//    protected $guarded = [];

    const TYPE_GONGSIXINWEN = 1;
    const TYPE_KEHUANLI = 2;
    const TYPE_WENYUDA = 3;
    const TYPE_HANGYEXINWEN = 4;

    public static $typeMap = [
        'gongsixinwen' => self::TYPE_GONGSIXINWEN,
        'kehuanli' => self::TYPE_KEHUANLI,
        'wenyuda' => self::TYPE_WENYUDA,
        'hangyexinwen' => self::TYPE_HANGYEXINWEN,
    ];

    // 全局条件限制
//    protected static function boot()
//    {
//        parent::boot();
//        static::addGlobalScope(new SpectacleScope);
//    }

    public function category(){
        return $this->belongsTo('App\Models\ArticleCategory', 'cat_id', 'id');
    }

    // 定义索引里面的type
    public function searchableAs()
    {
        return "article";
    }

    // 定义有那些字段需要搜索
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
        ];
    }
    
}
