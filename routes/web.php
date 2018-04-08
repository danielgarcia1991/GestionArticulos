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
Route::get('/Registroelementos','CategoriesController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::get('/gestion_articulos','ArticleController@index')->middleware('auth');
Route::get('/agregararticulos','RegistroArticulosController@create')->middleware('auth');
Route::post('/insertar_articulos','ArticleController@store')->middleware('auth');


Route::get('/agregarcategorias','registroelementosController@create')->middleware('auth');
Route::get('/Registroelementos','CategoriesController@index')->middleware('auth');
Route::get('/registrar_categorias','CategoriesController@create')->middleware('auth');
Route::post('/insertar_categorias','CategoriesController@store')->middleware('auth');

Route::get('/editarcategorias/{id}', 'CategoriesController@edit')->middleware('auth');
Route::put('/editar_categorias/{id}','CategoriesController@update')->middleware('auth');

Route::get('/editararticulos/{id}', 'ArticleController@edit')->middleware('auth');
Route::put('/editar_articulos/{id}','ArticleController@update')->middleware('auth');





