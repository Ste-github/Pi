<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gerenciarController extends Controller
{
    public function paginaGerenciar(){
            return view('paginas.gerenciar');
    }
     public function paginaHomeProdutos(){
            return view('paginas.homeprodutos');
    }

     public function paginaHomeClientes(){
            return view('paginas.homeclientes');
    }

    public function paginaCadproduto(){
        return view('paginas.cadproduto');
    }

    public function paginaAtuproduto(){
        return view('paginas.atualizarproduto');
    }

    public function paginaConsulproduto(){
        return view('paginas.consultarproduto');
    }

    public function paginaExcluirproduto(){
        return view('paginas.excluirproduto');
    }
//-----------------------------------------------------
    public function paginaCadcliente(){
        return view('paginas.cadclientes');
    }

     public function paginaAtucliente(){
        return view('paginas.atualizarcliente');
    }

    public function paginaConsulcliente(){
        return view('paginas.consultarcliente');
    }

    public function paginaExcluircliente(){
        return view('paginas.excluircliente');
    }


}