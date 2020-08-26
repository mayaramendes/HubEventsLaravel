<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
      public function store(){
        $fornecedor = new fornecedor; // nome igual o arquivo no model
    
        $fornecedor->nome = request('nomeCompleto');
        $fornecedor->email = request('email');
        $fornecedor->senha = request('senha');


        $fornecedor->save();

        return redirect('/servicos');
    }
}
