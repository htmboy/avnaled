<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
//    use Searchable;

    protected $table = 'avna_article';
    protected $guarded = [];

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
