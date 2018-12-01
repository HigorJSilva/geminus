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

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::get('/main/logout', 'MainController@logout');
Route::get('/esqueceusenha','EmailController@index');
Route::post('/main/validaremail', 'EmailController@validaremail');
Route::get('/esqueceusenha','EmailController@index');
Route::get('/teste', 'MainController@teste');
// <<<<<<< HEAD
Route::post('/novo-teste/', 'MainController@novoTeste');
// =======
Route::post('/teste/checklogin', 'MainController@checklogin');
Route::post('/teste/validaremail', 'EmailController@validaremail');


Route::get('/login', 'MainController@index');
Route::post('/login/checklogin', 'MainController@checklogin');
Route::get('/login/logout', 'MainController@logout');
// >>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
Route::get('teste-view-email', 'MainController@viewEmail');



/*
 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');*/
