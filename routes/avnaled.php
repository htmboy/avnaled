<?php
Route::prefix('backstage')->group(function(){
    // 用户模块
    Route::get('/register', 'Backstage\RegisterController@index')->name('register.index');
    // 注册行为
    Route::post('/register', 'Backstage\RegisterController@register')->name('register.store');

    // 登录页面
    Route::get('/login', 'Backstage\LoginController@index')->name('login.index');
    // 登录行为
    Route::post('/login', 'Backstage\LoginController@login')->name('login');

    // 登出行为
    Route::get('/logout', 'Backstage\LoginController@logout')->name('logout');

    // 个人设置页面
    Route::get('/user/setting', 'Backstage\UserController@index')->name('user.index');
    // 个人设置行为
    Route::post('/user/setting', 'Backstage\UserController@update')->name('user.update');

    // 网站设置
    Route::get('/setting', 'Backstage\SettingController@index')->name('setting.index');
    Route::put('/setting', 'Backstage\SettingController@update')->name('setting.update');

    // 轮播图
    Route::get('/carousel', 'Backstage\CarouselController@index')->name('carousel.index');
    Route::get('/carousel/create', 'Backstage\CarouselController@create')->name('carousel.create');
    Route::post('/carousel', 'Backstage\CarouselController@store')->name('carousel.store');
    Route::get('/carousel/{carousel}/edit', 'Backstage\CarouselController@edit')->name('carousel.edit');
    Route::put('/carousel/{carousel}', 'Backstage\CarouselController@update')->name('carousel.update');
    Route::delete('/carousel/{carousel}', 'Backstage\CarouselController@destory')->name('carousel.destory');

    // 产品
    Route::get('/product', 'Backstage\Product\ProductController@index')->name('product.index');
    Route::get('/product/create', 'Backstage\Product\ProductController@create')->name('product.create');
    Route::post('/product', 'Backstage\Product\ProductController@store')->name('product.store');
    Route::get('/product/{product}', 'Backstage\Product\ProductController@edit')->name('product.edit');
    Route::put('/product/{product}', 'Backstage\Product\ProductController@update')->name('product.update');
    Route::delete('/product/{product}', 'Backstage\Product\ProductController@destroy')->name('product.destroy');


    Route::get('/product/category', 'Backstage\Product\ProductCategoryController@index')->name('pro_category.index');
    Route::post('/product/category', 'Backstage\Product\ProductCategoryController@store')->name('pro_category.store');
    Route::put('/product/category/{productCategory}', 'Backstage\Product\ProductCategoryController@update')->name('pro_category.update');


    Route::get('/product/gallery/{pro_id}', 'Backstage\Product\ProductGalleryController@index')->name('gallery.index');
    Route::get('/product/gallery/{pro_id}/create', 'Backstage\Product\ProductGalleryController@create')->name('gallery.create');
    Route::post('/product/gallery/{pro_id}', 'Backstage\Product\ProductGalleryController@store')->name('gallery.store');
    Route::delete('/product/gallery/{pro_id}/{productGallery}', 'Backstage\Product\ProductGalleryController@destroy')->name('gallery.destroy');

    // 文章
    Route::get('/article', 'Backstage\Article\ArticleController@index')->name('article.index');
    Route::get('/article/create', 'Backstage\Article\ArticleController@create')->name('article.create');
    Route::post('/article', 'Backstage\Article\ArticleController@store')->name('article.store');
    Route::get('/article/{article}/edit', 'Backstage\Article\ArticleController@edit')->name('article.edit');
    Route::put('/article/{article}', 'Backstage\Article\ArticleController@update')->name('article.update');
    Route::delete('/article/{article}', 'Backstage\Article\ArticleController@destroy')->name('article.destroy');


    Route::get('/article/category', 'Backstage\Article\ArticleCategoryController@index')->name('art_category.index');
    Route::post('/article/category', 'Backstage\Article\ArticleCategoryController@store')->name('art_category.store');
    Route::put('/article/category/{articleCategory}', 'Backstage\Article\ArticleCategoryController@edit')->name('art_category.');

    Route::get('links', 'Backstage\LinksController@index')->name('link.index');
    Route::post('links', 'Backstage\LinksController@store')->name('link.store');
    Route::get('links/{links}/edit', 'Backstage\LinksController@edit')->name('link.edit');
    Route::put('links/{links}', 'Backstage\LinksController@update')->name('link.update');
    Route::delete('links/{links}', 'Backstage\LinksController@destroy')->name('link.destroy');

    Route::resource('setting', 'Backstage\SettingController')->only(['index', 'store']);

});