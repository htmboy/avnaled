<?php

use App\Http\Resources\ProductCategoryCollection;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('backstage')->group(function (){
    Route::post('/isshow', 'Backstage\ApiController@isShow');
    Route::post('/sort', 'Backstage\ApiController@sort');
});