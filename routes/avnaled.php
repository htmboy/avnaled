<?php
Route::prefix('backstage')->group(function(){
    // 用户模块
    // 注册页面
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

    // 产品
    Route::get('/product', 'Backstage\Product\ProductController@index');
    Route::get('/product/add', 'Backstage\Product\ProductController@addView');
    Route::post('/product/add', 'Backstage\Product\ProductController@addProduct');
    Route::get('/product/{product}/edit', 'Backstage\Product\ProductController@editView');
    Route::put('/product/{product}/edit', 'Backstage\Product\ProductController@editProduct');
    Route::get('/product/{product}/del', 'Backstage\Product\ProductController@del');

    Route::get('/product/category', 'Backstage\Product\CategoryController@index');
    Route::get('/product/category', 'Backstage\Product\CategoryController@add');
    Route::post('/product/category/edit', 'Backstage\Product\CategoryController@edit');

    Route::get('/product/gallery/{pro_id}', 'Backstage\Product\ProductController@gallery');
    Route::get('/product/gallery/{pro_id}/add', 'Backstage\Product\ProductController@galleryAddView');
    Route::post('/product/gallery/{pro_id}/add', 'Backstage\Product\ProductController@galleryAdd');
    Route::put('/product/gallery/{pro_id}/edit', 'Backstage\Product\ProductController@galleryUpdate');
    Route::get('/product/gallery/{pro_id}/{productGallery}/del', 'Backstage\Product\ProductController@galleryDel');


});