<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 用户模块
// 注册页面
Route::get('/backstage/register', 'RegisterController@index');
// 注册行为
Route::post('/backstage/register', 'RegisterController@register');

// 登录页面
Route::get('/backstage/login', 'LoginController@index');
// 登录行为
Route::post('/backstage/login', 'LoginController@login');

// 登出行为
Route::get('/backstage/logout', 'LoginController@logout');

// 个人设置页面
Route::get('/user/setting', 'UserController@setting');
// 个人设置行为
Route::post('/user/setting', 'UserController@settingStore');
