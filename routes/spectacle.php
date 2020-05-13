<?php

Route::prefix('spectacle')->group(function(){

    Route::get('/index.html', 'Spectacle\IndexController@index')->name('spectacle.index');
    Route::get('/cases.html', 'Spectacle\CasesController@cases')->name('spectacle.cases');
    Route::get('/contact.html', 'Spectacle\ContactController@contact')->name('spectacle.contact');
    Route::get('/history.html', 'Spectacle\HistoryController@history')->name('spectacle.history');
    Route::get('/introduction.html', 'Spectacle\IntroductionController@introduction')->name('spectacle.introduction');

    Route::get('/product.html', 'Spectacle\ProductsController@product')->name('spectacle.indes')->name('spectacle.product');
    Route::get('/product/{product}.html', 'Spectacle\ProductsController@productList')->name('spectacle.pro_category');
    Route::get('/product/secondary/{product}.html', 'Spectacle\ProductsController@productSecondaryList')->name('spectacle.pro_secondary');
    Route::get('/product/detail/{product}.html', 'Spectacle\ProductsController@productDetail')->name('spectacle.pro_detail');

    Route::get('/article.html', 'Spectacle\ArticlesController@article')->name('spectacle.article');
    Route::get('/article/{articleCategory}.html', 'Spectacle\ArticlesController@articleList')->name('spectacle.art_category');
    Route::get('/article/detail/{article}.html', 'Spectacle\ArticlesController@articleDetail')->name('spectacle.art_detail');

    Route::get('/search.html', 'Spectacle\SearchController@search')->name('spectacle.search');

});