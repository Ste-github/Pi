
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


//Páginas Login 



//Telas de Login do Caio
Route::get('/',[\App\Http\Controllers\loginController::Class,'paginaLogin']);
Route::get('/cadLogin',[\App\Http\Controllers\loginController::Class,'paginaCadlogin']);









//Páginas CRUD Produto +Cliente 
Route::get('/gerenciar',[\App\Http\Controllers\GerenciarController::Class,'paginaGerenciar']);
Route::get('/homeprodutos',[\App\Http\Controllers\GerenciarController::Class,'paginaHomeProdutos']);
Route::get('/homeclientes',[\App\Http\Controllers\GerenciarController::Class,'paginaHomeClientes']);

Route::get('/cadproduto',[\App\Http\Controllers\GerenciarController::Class,'paginaCadproduto']); 
Route::get('/atualizarproduto',[\App\Http\Controllers\GerenciarController::Class,'paginaAtuproduto']); 
Route::get('/consultarproduto',[\App\Http\Controllers\GerenciarController::Class,'paginaConsulproduto']); 
Route::get('/excluirproduto',[\App\Http\Controllers\GerenciarController::Class,'paginaExcluirproduto']); 

Route::get('/cadclientes',[\App\Http\Controllers\GerenciarController::Class,'paginaCadcliente']); 
Route::get('/atualizarcliente',[\App\Http\Controllers\GerenciarController::Class,'paginaAtucliente']); 
Route::get('/consultarcliente',[\App\Http\Controllers\GerenciarController::Class,'paginaConsulcliente']); 
Route::get('/excluircliente',[\App\Http\Controllers\GerenciarController::Class,'paginaExcluircliente']); 
//---------------------------------------------------------------------------------------------------------
//Páginas Vendas 
Route::get('/produtos',[\App\Http\Controllers\produtosController::Class,'paginaProdutos']);
Route::get('/itensVenda',[\App\Http\Controllers\itensvendaController::Class,'paginaItens']);
Route::get('/vendas',[\App\Http\Controllers\vendasController::Class,'paginaVendas']); 