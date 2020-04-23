<?php
Route::prefix('backstage')->group(function(){
    // 用户模块
    Route::get('/register', 'Backstage\RegisterController@index');
    // 注册行为
    Route::post('/register', 'Backstage\RegisterController@register');

    // 登录页面
    Route::get('/login', 'Backstage\LoginController@index');
    // 登录行为
    Route::post('/login', 'Backstage\LoginController@login');

    // 登出行为
    Route::get('/logout', 'Backstage\LoginController@logout');

    // 个人设置页面
    Route::get('/user/setting', 'Backstage\UserController@setting');
    // 个人设置行为
    Route::post('/user/setting', 'Backstage\UserController@settingStore');

    // 网站设置
    Route::get('/setting', 'Backstage\SettingController@index');
    Route::put('/setting', 'Backstage\SettingController@edit');

    // 轮播图
    Route::get('/carousel', 'Backstage\CarouselController@index');
    Route::get('/carousel/add', 'Backstage\CarouselController@addView');
    Route::post('/carousel/add', 'Backstage\CarouselController@addCarousel');
    Route::get('/carousel/{carousel}/edit', 'Backstage\CarouselController@editView');
    Route::put('/carousel/{carousel}/edit', 'Backstage\CarouselController@editCarousel');
    Route::get('/carousel/{carousel}/del', 'Backstage\CarouselController@del');

    // 产品
    Route::get('/product', 'Backstage\Product\ProductController@index');
    Route::get('/product/add', 'Backstage\Product\ProductController@addView');
    Route::post('/product/add', 'Backstage\Product\ProductController@addProduct');
    Route::get('/product/{product}/edit', 'Backstage\Product\ProductController@editView');
    Route::put('/product/{product}/edit', 'Backstage\Product\ProductController@editProduct');
    Route::get('/product/{product}/del', 'Backstage\Product\ProductController@del');


    Route::get('/product/category', 'Backstage\Product\ProductCategoryController@index');
    Route::post('/product/category', 'Backstage\Product\ProductCategoryController@add');
    Route::post('/product/category/edit', 'Backstage\Product\ProductCategoryController@edit');


    Route::get('/product/gallery/{pro_id}', 'Backstage\Product\ProductController@gallery');
    Route::get('/product/gallery/{pro_id}/add', 'Backstage\Product\ProductController@galleryAddView');
    Route::post('/product/gallery/{pro_id}/add', 'Backstage\Product\ProductController@galleryAdd');
    Route::put('/product/gallery/{pro_id}/edit', 'Backstage\Product\ProductController@galleryUpdate');
    Route::get('/product/gallery/{pro_id}/{productGallery}/del', 'Backstage\Product\ProductController@galleryDel');

    // 文章
    Route::get('/article', 'Backstage\Article\ArticleController@index');
    Route::get('/article/add', 'Backstage\Article\ArticleController@addView');
    Route::post('/article/add', 'Backstage\Article\ArticleController@addArticle');
    Route::get('/article/{article}/edit', 'Backstage\Article\ArticleController@editView');
    Route::put('/article/{article}/edit', 'Backstage\Article\ArticleController@editArticle');
    Route::get('/article/{article}/del', 'Backstage\Article\ArticleController@del');


    Route::get('/article/category', 'Backstage\Article\ArticleCategoryController@index');
    Route::post('/article/category', 'Backstage\Article\ArticleCategoryController@add');
    Route::post('/article/category/edit', 'Backstage\Article\ArticleCategoryController@edit');

    Route::resource('links', 'Backstage\LinksController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('setting', 'Backstage\SettingController')->only(['index', 'store']);

});