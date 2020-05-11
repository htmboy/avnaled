<?php

Route::prefix('spectacle')->group(function(){

    Route::get('/index.html', 'Spectacle\IndexController@index');
    Route::get('/cases.html', 'Spectacle\CasesController@cases');
    Route::get('/contact.html', 'Spectacle\ContactController@contact');
    Route::get('/history.html', 'Spectacle\HistoryController@history');
    Route::get('/introduction.html', 'Spectacle\IntroductionController@introduction');

    Route::get('/product.html', 'Spectacle\ProductsController@product');
    Route::get('/product/{product}.html', 'Spectacle\ProductsController@productList');
    Route::get('/product/secondary/{product}.html', 'Spectacle\ProductsController@productSecondaryList');
    Route::get('/product/detail/{product}.html', 'Spectacle\ProductsController@productDetail');

    Route::get('/article.html', 'Spectacle\ArticlesController@article');
    Route::get('/article/{articleCategory}.html', 'Spectacle\ArticlesController@articleList');
    Route::get('/article/detail/{article}.html', 'Spectacle\ArticlesController@articleDetail');

    Route::get('/search.html', 'Spectacle\SearchController@search');

});