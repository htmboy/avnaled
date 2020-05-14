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

    Route::resources([
        // 轮播图
        'carousels' => 'Backstage\CarouselController',
        // 友情链接
        'links' => 'Backstage\LinksController',
        // 产品目录
        '/product/pro_category' => 'Backstage\Product\ProductCategoryController',
        // 产品图片
        'product/{pro_id}/gallery' => 'Backstage\Product\ProductGalleryController',
        // 产品中心
        'product' => 'Backstage\Product\ProductController',
        // 文章目录
        'article/art_category' => 'Backstage\Article\ArticleCategoryController',
        // 文章中心
        'articles' => 'Backstage\Article\ArticleController',
        ]);

    Route::resource('setting', 'Backstage\SettingController')->only(['index', 'store']);

});