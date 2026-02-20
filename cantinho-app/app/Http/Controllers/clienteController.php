<?php

namespace App\Http\Controllers;

use App\Models\clientesModel;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function inserir(Request $request){
        $nomeCliente = $request->input('nomeCliente');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $divida = $request->input('divida');
        //Inserir os dados no banco
        $model = new clientesModel();
        $model->nomeCliente = $nomeCliente;
        $model->cpf = $cpf;
        $model->email = $email;
        $model->telefone = $telefone;
        $model->divida = $divida;
        //Efetivar a inserção no banco
        $model->save();
        return redirect('homeclientes');
    }//Fim do Inserir

    public function editar($id){
        $dado = clientesModel::findOrFail($id);
        return view('paginas.atualizarcliente', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        clientesModel::where('id', $id)->update($request->all());
        return redirect('consultarPaginaInicialC');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        clientesModel::where('id', $id)->delete($request->all());
        return redirect('consultarPaginaInicialC');
    }//Fim do excluir

    public function consultarPaginaInicialC(){
        $ids = clientesModel::all();
        return view('paginas.consultarcliente', compact('ids'));
    }//Fim do consultarPaginaInicialP
}//Fim da classe model