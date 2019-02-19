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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'MainController@index');
Route::post('/login/checklogin', 'MainController@checklogin');
Route::get('/login', 'MainController@index')->name('entrar');
Route::get('/logout', 'MainController@logout');

Route::get('/geminus', 'MainController@sucesso');

Route::get('/esqueceusenha','EmailController@index');
Route::post('/esqueceusenha', 'EmailController@validaremail');

Route::get('/cadastrar','UsuarioController@index');
Route::post('/cadastrar','UsuarioController@cadastrar');
Route::get('cadastrar/{id}','UsuarioController@editar');

Route::get('excluir/{id}','UsuarioController@excluir');

Route::post('/alterar','UsuarioController@alterar');

Route::get('/listar','UsuarioController@listar');







/*
 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');*/
