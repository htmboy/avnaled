<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Product::class, function(Faker $faker){
    return [
        'cat_id' => rand(1, 3),
        'title' => $faker->sentence(6),
        'seo_title' => $faker->sentence(6),
        'seo_keywords' => $faker->sentence(3),
        'seo_description' => $faker->paragraph(1),
        'thumbnail' => $faker->paragraph(1),
        'number' => $faker->sentence(1),
        'watts' => rand(100, 400) . 'w',
        'size' => rand(100, 400).'*'.rand(100, 400),
        'color' => $faker->sentence(1),
        'package' => $faker->sentence(1),
        'weight' => rand(100, 500).'kg',
        'voltage' => '暂略',
        'angle' => rand(12, 150),
        'waterproof' => '无',
        'life' => '>500000小时',
        'distance' => '3~5米',
        'material' => '暂略',
        'characteristic' => $faker->paragraph(1),
        'content' => $faker->paragraph(10),
        'is_show' => 1,
        'sort' => rand(10, 99),
        'cat_sort' => rand(10, 99),
    ];
});

/*
 * 自动填充数据
 * 1, php artisan tinker
 * 2, factory(App\Models\Product::class, 3)->make()
 * 3, factory(App\Models\Product::class, 50)->create() 直接创建到数据上
 * 4, 修改后需要重新运行 php artisan tinker 命令才能生效,否则只会沿用 php artisan tinker 运行时那一刻的代码
 * */