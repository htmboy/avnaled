<?php

namespace App\Models;

use App\Models\Scopes\SpectacleScope;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends BaseModel
{
//    use Searchable;

    protected $table = 'aoo_article';
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

    public function category(){
        return $this->belongsTo('App\Models\ArticleCategory', 'cat_id', 'id');
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
