<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/produtos', 'Api\ProdutoController@get');
Route::post('/produto', 'Api\ProdutoController@create');
Route::put('/produto/{id}', 'Api\ProdutoController@update');
Route::delete('/produto/{id}', 'Api\ProdutoController@delete');

Route::get('/clientes', 'Api\ClienteController@get');
Route::get('/clientes/{NomeUsuario}', 'Api\ClienteController@getByNomeUsuario');
Route::post('/cliente', 'Api\ClienteController@create');
Route::put('/cliente/{id}', 'Api\ClienteController@update');
Route::delete('/cliente/{id}', 'Api\ClienteController@delete');

Route::get('/moradas', 'Api\MoradaController@get');
Route::post('/morada', 'Api\MoradaController@create');
Route::put('/morada/{id}', 'Api\MoradaController@update');
Route::delete('/morada/{id}', 'Api\MoradaController@delete');

Route::get('/pedidos', 'Api\PedidoController@get');
Route::get('/pedidoprodutos', 'Api\PedidoProdutoController@get');

Route::get('/sincronizacao', 'Api\SincronizacaoController@get');
