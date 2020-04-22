<?php
Route::prefix('spectacle')->group(function(){

    Route::get('/index.html', 'Spectacle\SpectacleController@index');
    Route::get('/zsjm.html', 'Spectacle\SpectacleController@zsjm');
    Route::get('/product.html', 'Spectacle\SpectacleController@product');
    Route::get('/product_detail.html', 'Spectacle\SpectacleController@product_detail');
    Route::get('/news.html', 'Spectacle\SpectacleController@news');
    Route::get('/news_detail.html', 'Spectacle\SpectacleController@news_detail');
    Route::get('/gsjj.html', 'Spectacle\SpectacleController@gsjj');
    Route::get('/fzlc.html', 'Spectacle\SpectacleController@fzlc');
    Route::get('/contact.html', 'Spectacle\SpectacleController@contact');

});