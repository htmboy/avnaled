<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'avna_setting';
    protected $keyType = 'string';
    protected $primaryKey = 'key';
    public $incrementing = false;
    protected $guarded = [];

    public static function getSeo($param)
    {
        return explode("%/%", self::find($param)->value);
    }
}
