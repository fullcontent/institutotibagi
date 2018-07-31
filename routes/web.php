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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/aprendiz', 'HomeController@aprendiz')->name('aprendiz');
Route::get('/contato', 'HomeController@contato')->name('contato');



Auth::routes();



Route::get('/admin', 'AdminController@index');
Route::get('/admin/usuarios','AdminController@usuarios');


