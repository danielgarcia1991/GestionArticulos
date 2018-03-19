<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/','FrontEndController@index');
Route::get('/','HomeController@index')->middleware('auth');
Route::get('/Registroelementos','registroelementosController@Registroelementos')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/agregarcategorias','registroelementosController@create')->middleware('auth');

Route::get('/gestion_articulos','ArticleController@article')->middleware('auth');

