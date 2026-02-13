<?php

namespace App\Http\Controllers;

use App\Models\funcionarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function paginaLogin(){
        return view('paginas.index');
    }//Fim da login

    public function paginaCadlogin(){
        return view('paginas.cadLogin');
    }//fim da visualizarCadastrar

    public function cadastrar(Request $request){
        //Validação
        $request->validate([
            'email' => 'required',
            'nomeUsuario' => 'required',
            'senha' => 'required | same:senhaConfirmada',
            'senhaConfirmada' => 'required'
        ],[
            'senha.same' => 'As senhas não conferem.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senhaConfirmada.required' => 'Confirme a senha'
        ]);

        //Salvar
        $email = $request->input('email');
        $nomeUsuario = $request->input('nomeUsuario');
        $senha = $request->input('senha');
        //Chamar a model
        $model = new funcionarioModel();
        $model->email = $email;
        $model->nomeUsuario = $nomeUsuario;
        $model->senha = $senha;
        //Efetivar no banco
        $model->save();

        return redirect('/')->with('success', 'Usuário cadastrado com sucesso!');
    }//Fim da cadastrar
}//Fim da classe model