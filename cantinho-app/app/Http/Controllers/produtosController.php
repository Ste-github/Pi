<?php

namespace App\Http\Controllers;

use App\Models\produtosModel;
use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function inserir(Request $request){
        $nomeProduto = $request->input('nomeProduto');
        $valor = $request->input('valor');
        $valorDesconto = $request->input('valorDesconto');
        $estoque = $request->input('estoque');
        //Inserir os dados no banco
        $model = new produtosModel();
        $model->nomeProduto = $nomeProduto;
        $model->valor = $valor;
        $model->valorDesconto = $valorDesconto;
        $model->estoque = $estoque;
        //Efetivar a inserção no banco
        $model->save();
        return redirect('homeprodutos');
    }//Fim do Inserir
 
    public function editar($id){
        $dado = produtosModel::findOrFail($id);
        return view('paginas.atualizarproduto', compact('dado'));
    }//Fim do editar
 
    public function atualizar(Request $request, $id){
        produtosModel::where('id', $id)->update($request->all());
        return redirect('consultarPaginaInicialP');
    }//Fim do atualizar
 
    public function excluir(Request $request, $id){
        produtosModel::where('id', $id)->delete($request->all());
        return redirect('consultarPaginaInicialP');
    }//Fim do excluir
 
    public function consultarPaginaInicialP(){
        $ids = produtosModel::all();
        return view('paginas.consultarproduto', compact('ids'));
    }//Fim do consultarPaginaInicialP
}