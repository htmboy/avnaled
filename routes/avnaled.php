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

    // 产品类目表
    Route::get('/product/category', 'Backstage\Product\CategoryController@index');
    Route::get('/product/category', 'Backstage\Product\CategoryController@add');
    Route::post('/product/category/edit', 'Backstage\Product\CategoryController@edit');

    // 产品表
    Route::get('/product', 'Backstage\Product\ProductController@index');
    Route::get('/product/add', 'Backstage\Product\ProductController@addView');
    Route::post('/product/add', 'Backstage\Product\ProductController@addProduct');
    Route::post('/product/edit', 'Backstage\Product\ProductController@edit');
    Route::post('/product/del', 'Backstage\Product\ProductController@del');

});