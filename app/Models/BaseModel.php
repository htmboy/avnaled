<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $guarded = [];
    public function scopeSpectacle($query)
    {
        return $query->where('is_show', '1')->orderBy('sort', 'desc');
    }
}
