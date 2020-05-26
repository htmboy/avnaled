<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-26
 * Time: 下午8:23
 */

namespace App\Http\Services;


use Illuminate\Database\Eloquent\Collection;

interface ProductCategoryService
{
    // 根据主类id查子类目
    public function queryAll(int $id):Collection;

}