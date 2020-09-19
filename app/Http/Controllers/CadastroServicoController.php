<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\CadastroServico; // chamar o model e usar a primeira letra maiúscula



class CadastroServicoController extends Controller
{
    
    public function store( Request $request){
        $cadastroServico = new CadastroServico; // nome igual o arquivo no model 
        
        if($request->hasfile('foto') && $request->foto->isvalid()){ //name do input
            $caminhoImagem = 'img/servicos';
            $foto = $request->file('foto');
            $fotoNome = $foto->getClientOriginalName();
            $fotoExt = $foto->getClientOriginalExtension();
            $fotoFinal = $fotoNome.date('Y-m-d-H-i-s').'.'.$fotoExt;
            $caminho = $request->file('foto')->storeAs($caminhoImagem, $fotoFinal, 'public');
            $cadastroServico->foto = $caminho;
        }
      
    
        $cadastroServico->nome = request('service');
        $cadastroServico->valor = request('valor');
        $cadastroServico->descricao = request('descricao');
        $cadastroServico->forma_de_pagamento = request('pagamento');
        // $cadastroServico->foto = '/img';
        $fornecedorId = auth()->user()->id;
        $cadastroServico->fornecedor_id = $fornecedorId;

        $cadastroServico->save();

        return redirect('/servicosCadastrados');
    }

    

}
