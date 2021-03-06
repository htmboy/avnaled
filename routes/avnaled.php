<?php

Route::prefix('avnaled')->group(function(){
// Route::domain('tst.avnaled.com')->group(function(){


    Route::get('', 'Avnaled\IndexController@index');
    Route::get('index.html', 'Avnaled\IndexController@index')->name('avnaled.index');
    Route::get('cases.html', 'Avnaled\CasesController@cases')->name('avnaled.cases');
    Route::get('contact.html', 'Avnaled\ContactController@contact')->name('avnaled.contact');
    Route::get('history.html', 'Avnaled\HistoryController@history')->name('avnaled.history');
    Route::get('introduction.html', 'Avnaled\IntroductionController@introduction')->name('avnaled.introduction');

    Route::get('product.html', 'Avnaled\ProductsController@product')->name('avnaled.product');
    Route::get('product/{productCategory}.html', 'Avnaled\ProductsController@productList')->name('avnaled.pro_category');
    Route::get('product/detail/{product}.html', 'Avnaled\ProductsController@productDetail')->name('avnaled.pro_detail');

    Route::get('article.html', 'Avnaled\ArticlesController@article')->name('avnaled.article');
    Route::get('article/{articleCategory}.html', 'Avnaled\ArticlesController@articleList')->name('avnaled.art_category');
    Route::get('article/detail/{article}.html', 'Avnaled\ArticlesController@articleDetail')->name('avnaled.art_detail');

    Route::get('search.html', 'Avnaled\SearchController@search')->name('avnaled.search');

});