<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'avna_article';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Models\ArticleCategory', 'cat_id', 'id');
    }
}
