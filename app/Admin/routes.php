<?php

use App\Admin\Controllers\LinkController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('carousels', 'CarouselController');
    $router->resource('product-categories', 'ProductCategoryController');
    $router->resource('products', 'ProductsController');
    $router->resource('product-galleries', 'ProductGalleryController');
    $router->resource('articles', 'ArticlesController');
    $router->resource('article-categories', 'ArticleCategoryController');
    $router->resource('links', 'LinkController');
});