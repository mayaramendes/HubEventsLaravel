<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\CadastroServico; // chamar o model e usar a primeira letra maiúscula



class CadastroServicoController extends Controller
{
    public function store(){
        $cadastroServico = new CadastroServico; // nome igual o arquivo no model
    
        $cadastroServico->nome = request('service');
        $cadastroServico->valor = request('valor');
        $cadastroServico->descricao = request('descricao');
        $cadastroServico->forma_de_pagamento = request('pagamento');
        $cadastroServico->foto = '/img';
        $cadastroServico->fornecedor_id = '2';

        $cadastroServico->save();

        return redirect('/servicos');
    }


}
