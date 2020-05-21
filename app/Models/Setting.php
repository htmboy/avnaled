<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends BaseModel
{
    protected $table = 'avna_setting';
    protected $keyType = 'string';
    protected $primaryKey = 'key';
    public $incrementing = false;

    public static function getSeo($param)
    {
        return explode("%/%", self::find($param)->value);
    }
}
