<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendasController extends Controller
{
    public function paginaInicial(){
            return view('paginas.index');



    }//fim da pagina inicial 
}//fim da classe