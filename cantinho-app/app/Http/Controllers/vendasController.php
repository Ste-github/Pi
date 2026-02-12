<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendasController extends Controller
{
    public function paginaVendas(){
            return view('paginas.vendas');
    }
   
}// fim da classe