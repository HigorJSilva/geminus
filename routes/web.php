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

Route::get('/cadastrarusuario','UsuarioController@index');
Route::post('/cadastrarusuario','UsuarioController@cadastrar');
Route::get('cadastrarusuario/{id}','UsuarioController@editar');

Route::get('excluirusuario/{id}','UsuarioController@excluir');

Route::post('/alterarusuario','UsuarioController@alterar');

Route::get('/listarusuario','UsuarioController@listar');


Route::get('/trocarsenha','UsuarioController@trocarSenha');
Route::post('/trocarsenha','UsuarioController@alterarSenha');



/*
 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');*/
