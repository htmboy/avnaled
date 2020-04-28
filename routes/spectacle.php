<?php

Route::prefix('spectacle')->group(function(){

    Route::get('/index.html', 'Spectacle\SpectacleController@index');
    Route::get('/cases.html', 'Spectacle\SpectacleController@cases');
    Route::get('/contact.html', 'Spectacle\SpectacleController@contact');
    Route::get('/history.html', 'Spectacle\SpectacleController@history');
    Route::get('/introduction.html', 'Spectacle\SpectacleController@introduction');

    Route::get('/product.html', 'Spectacle\SpectacleController@product');
    Route::get('/product/{product}.html', 'Spectacle\SpectacleController@productList');
    Route::get('/product/secondary/{product}.html', 'Spectacle\SpectacleController@productSecondaryList');
    Route::get('/product/detail/{product}.html', 'Spectacle\SpectacleController@productDetail');

    Route::get('/article.html', 'Spectacle\SpectacleController@article');
    Route::get('/article/{articleCategory}.html', 'Spectacle\SpectacleController@articleList');
    Route::get('/article/detail/{article}.html', 'Spectacle\SpectacleController@articleDetail');

    Route::get('/search.html', 'Spectacle\SpectacleController@search');

});