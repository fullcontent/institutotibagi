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
Route::get('/empresas', 'HomeController@empresas')->name('empresas');
Route::get('/contato', 'HomeController@contato')->name('contato');

Route::get('/cursos', 'HomeController@cursos')->name('cursos');
Route::get('/curso/{id}/{slug?}', 'HomeController@curso')->name('curso');

Route::get('/noticia/{id}/{slug?}', 'HomeController@noticia')->name('noticia');
Route::get('/noticias', 'HomeController@noticias');




Auth::routes();



Route::get('/admin', 'AdminController@index');


Route::resource('/admin/usuarios', 'Admin\UsuariosController');
Route::resource('/admin/noticias','Admin\NoticiasController');
Route::resource('/admin/cursos','Admin\CursosController');
Route::resource('/admin/parceiros','Admin\ParceirosController');


