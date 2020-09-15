<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroServico;

class ServicoSolicitadoController extends Controller
{
    public function servicos( ){
       $servicos = CadastroServico::paginate(8);
       return view('servicos',compact('servicos'));

    }
}
