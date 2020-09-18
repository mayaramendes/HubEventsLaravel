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
        $fornecedor->password = request('password');


        $fornecedor->save();

        return redirect('/servicos');
    }

    public function cadastrarFornecedor()
    {
        // Cadastro do fornecedor
        $cadastrarFornecedor = new Fornecedor();
        
        $cadastrarFornecedor->nome = request('nome');
        $cadastrarFornecedor->email = request('email');
        $cadastrarFornecedor->telefoneCelular = request('telefoneCelular');
        $cadastrarFornecedor->telefoneFixo = request('telefoneFixo');
        $cadastrarFornecedor->endereco = request('endereco');
        $cadastrarFornecedor->cidade = request('cidade');
        $cadastrarFornecedor->estado = request('estado');
        $cadastrarFornecedor->cep = request('cep');
        $cadastrarFornecedor->password = bcrypt(request('password')); // senha criptografada 
        $cadastrarFornecedor->save();
        
        
        
        return redirect('/login'); // para retornar o arquivo cadastroFornecedor.blade.php
    }
}
