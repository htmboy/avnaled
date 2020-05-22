<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndexArticle extends Model
{
    protected $table = 'aoo_index_article';

    public $timestamps = false;

    public function article()
    {
        return $this->hasOne('App\Models\Article', 'id', 'art_id');
    }
}
