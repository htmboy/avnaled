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

$factory->define(App\Models\Article::class, function(Faker $faker){
    return [
        'cat_id' => rand(1, 3),
        'title' => $faker->sentence(6),
        'seo_title' => $faker->sentence(6),
        'seo_keywords' => $faker->sentence(3),
        'seo_description' => $faker->paragraph(1),
        'thumbnail' => $faker->paragraph(1),
        'author' => $faker->sentence(1),
        'clicks' => rand(10, 99),
        'content' => $faker->paragraph(10),
        'is_show' => 1,
        'cat_sort' => rand(10, 99),
        'sort' => rand(10, 99),
    ];
});

/*
 * 自动填充数据
 * 1, php artisan tinker
 * 2, factory(App\Models\Article::class, 2)->make() 直接打印到控制台上
 * 3, factory(App\Models\Article::class, 50)->create() 直接创建到数据上
 * 4, 修改后需要重新运行 php artisan tinker 命令才能生效,否则只会沿用 php artisan tinker 运行时那一刻的代码
 * */