<?php

Route::prefix('avnaled')->group(function(){

    Route::get('/index.html', 'Avnaled\IndexController@index')->name('avnaled.index');
    Route::get('/cases.html', 'Avnaled\CasesController@cases');
    Route::get('/contact.html', 'Avnaled\ContactController@contact');
    Route::get('/history.html', 'Avnaled\HistoryController@history');
    Route::get('/introduction.html', 'Avnaled\IntroductionController@introduction');

    Route::get('/product.html', 'Avnaled\ProductsController@product');
    Route::get('/product/{product}.html', 'Avnaled\ProductsController@productList');
    Route::get('/product/secondary/{product}.html', 'Avnaled\ProductsController@productSecondaryList');
    Route::get('/product/detail/{product}.html', 'Avnaled\ProductsController@productDetail');

    Route::get('/article.html', 'Avnaled\ArticlesController@article');
    Route::get('/article/{articleCategory}.html', 'Avnaled\ArticlesController@articleList');
    Route::get('/article/detail/{article}.html', 'Avnaled\ArticlesController@articleDetail');

    Route::get('/search.html', 'Avnaled\SearchController@search');

});