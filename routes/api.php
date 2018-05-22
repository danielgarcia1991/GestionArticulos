<?php

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




Route::resource('api_registroelementos', 'CategoriesApiController')->only([
    'index','show','store','destroy','update'
]);

Route::resource('api_aregistroelementos', 'Categories2ApiController')->only([
    'show'
]);


Route::resource('api_registroarticulos', 'ArticlesApiController')->only([
    'index','show','store','destroy','update'
]);

Route::resource('api_aregistroarticulos', 'Articles2ApiController')->only([
    'show'
]);


Route::resource('api_login', 'LoginApiController')->only([
    'show'
]);
