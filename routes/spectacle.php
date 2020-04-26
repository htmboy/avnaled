<?php

Route::prefix('spectacle')->group(function(){

    Route::get('/index.html', 'Spectacle\SpectacleController@index');
    Route::get('/cases.html', 'Spectacle\SpectacleController@cases');
    Route::get('/contact.html', 'Spectacle\SpectacleController@contact');

    Route::get('/product.html', 'Spectacle\SpectacleController@product');
    Route::get('/product/{product}.html', 'Spectacle\SpectacleController@productList');
    Route::get('/product/detail/{product}.html', 'Spectacle\SpectacleController@productDetail');

    Route::get('/article.html', 'Spectacle\SpectacleController@article');
    Route::get('/article/{articleCategory}.html', 'Spectacle\SpectacleController@articleDetail');
    Route::get('/article/detail/{article}.html', 'Spectacle\SpectacleController@articleDetail');


});