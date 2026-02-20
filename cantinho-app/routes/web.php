
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
//--------------------------------------------------------------------------------------------------------------------------------------
//CRUD Cadastrar Produto
//Rota para as telas de produto
Route::get('/consultarPaginaInicialP',[\App\Http\Controllers\produtosController::class,'consultarPaginaInicialP']);
Route::get('/cadastrarP',[\App\Http\Controllers\produtosController::class,'cadastrar']);
Route::get('/cadProduto/salvarP',[\App\Http\Controllers\produtosController::class,'inserir']);
Route::get('/editarP/{id}',[\App\Http\Controllers\produtosController::class,'editar']);
Route::get('/atualizarP/{id}',[\App\Http\Controllers\produtosController::class,'atualizar']);
Route::get('/excluirP/{id}',[\App\Http\Controllers\produtosController::class,'excluir']);
//--------------------------------------------------------------------------------------------------------------------------------------
//CRUD Cadastrar Cliente
//Rota para as telas de cliente
Route::get('/consultarPaginaInicialC',[\App\Http\Controllers\clienteController::class,'consultarPaginaInicialC']);
Route::get('/cadastrarC',[\App\Http\Controllers\clienteController::class,'cadastrar']);
Route::get('/cadclientes/salvarC',[\App\Http\Controllers\clienteController::class,'inserir']);
Route::get('/editarC/{id}',[\App\Http\Controllers\clienteController::class,'editar']);
Route::get('/atualizarC/{id}',[\App\Http\Controllers\clienteController::class,'atualizar']);
Route::get('/excluirC/{id}',[\App\Http\Controllers\clienteController::class,'excluir']);