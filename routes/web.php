<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/sobre','SobreController@index')->name('sobre');
Route::get('/loja','LojaController@index')->name('loja');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit','EditController@index')->name('edit');
Route::post('/edit','EditController@update')->name('edit-save');

Route::get('/pedidos', 'EncomendaController@index')->name('pedidos');
Route::post('/pedidos', 'EncomendaController@CancelarEncomenda')->name('pedido-cancelar');
Route::get('/pedidos/estado/{estado}', 'EncomendaController@getByEstado');
