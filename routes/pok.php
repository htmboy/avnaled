<?php

Route::prefix('pok')->group(function(){

    Route::get('/index.html', 'Pok\IndexController@index')->name('pok.index');
    Route::get('/cases.html', 'Pok\CasesController@cases')->name('pok.cases');
    Route::get('/contact.html', 'Pok\ContactController@contact')->name('pok.contact');
    Route::get('/history.html', 'Pok\HistoryController@history')->name('pok.history');
    Route::get('/introduction.html', 'Pok\IntroductionController@introduction')->name('pok.introduction');

    Route::get('/product.html', 'Pok\ProductsController@product')->name('pok.product');
    Route::get('/product/{product}.html', 'Pok\ProductsController@productList')->name('pok.pro_category');
//    Route::get('/product/secondary/{product}.html', 'Pok\ProductsController@productSecondaryList')->name('pok.pro_secondary');
    Route::get('/product/detail/{product}.html', 'Pok\ProductsController@productDetail')->name('pok.pro_detail');

    Route::get('/article.html', 'Pok\ArticlesController@article')->name('pok.article');
    Route::get('/article/{articleCategory}.html', 'Pok\ArticlesController@articleList')->name('pok.art_category');
    Route::get('/article/detail/{article}.html', 'Pok\ArticlesController@articleDetail')->name('pok.art_detail');

    Route::get('/search.html', 'Pok\SearchController@search')->name('pok.search');

});