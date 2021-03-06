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
Route::get('/aprendiz/quero-ser-um-aprendiz', 'HomeController@aprendizInscricao')->name('aprendizQuero');
Route::post('/aprendiz/quero-ser-um-aprendiz', 'HomeController@aprendizInscricaoSEND')->name('aprendizInscricaoSEND');




Route::get('/empresas', 'HomeController@empresas')->name('empresas');


Route::get('/contato', 'HomeController@contato')->name('contato');
Route::post('/contato', 'HomeController@contatoSEND')->name('contatoSEND');





Route::get('/cursos', 'HomeController@cursos')->name('cursos');
Route::get('/curso/{id}/{slug?}', 'HomeController@curso')->name('curso');

Route::get('/noticia/{id}/{slug?}', 'HomeController@noticia')->name('noticia');
Route::get('/noticias', 'HomeController@noticias');



Route::get('/doacoes', 'HomeController@doacoes')->name('doacoes');
Route::get('/doacoesIR','HomeController@doacoesIR')->name('doacoesIR');
Route::post('/doacoesIR', 'HomeController@doacoesIRSEND')->name('doacoesIRSEND');


Route::get('/doacoesIR','HomeController@doacoesIR')->name('doacoesIR');


Auth::routes();



Route::get('/admin', 'AdminController@index');


Route::resource('/admin/usuarios', 'Admin\UsuariosController');
Route::resource('/admin/noticias','Admin\NoticiasController');

Route::resource('/admin/aprendizes','Admin\AprendizesController');

Route::resource('/admin/cursos','Admin\CursosController');
Route::get('/admin/cursos/duplicar/{id}', 'Admin\CursosController@duplicate')->name('cursos.duplicate');



Route::get('/admin/menu', function() {

$routeCollection = json_decode(json_encode(Route::getRoutes()->get(),true),true);
foreach ($routeCollection as $key => $value) {
     if(array_key_exists('as',$value['action'])){
        dump($value['action']['as']);
   }
}

});



