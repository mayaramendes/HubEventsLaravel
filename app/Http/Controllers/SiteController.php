<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroServico;

class SiteController extends Controller
{
    public function home()
    {
     //Pagina inicial do site
        return view('index');
    }

    public function about()
    {
     //Pagina sobre
        return view('about');
    }

    public function servicos()
    {
     //Pagina de serviços
        return view('servicos');
    }

    public function login()
    {
     //Pagina de login
        return view('login');
    }

    public function loginCliente()
    {
        //Pagina de login do fornecedor
        return view('loginCliente');
    }

    public function descricaoServico()
    {
    // Pagina de Descrição de Servicos 
        return view('descricaoServico');
    }

    public function cadastrarServicos()
    {
    // Pagina de Cadastro de Serviços
        return view('cadastrarServicos');
    }

    public function homeCadastrarServicos()
    {
    // Home do Cadastro de Serviços
        return view('home');
    }

    public function servicosCadastrados()
    {
        $fornecedorId = auth()->user()->id;
        $servicos = CadastroServico::where('fornecedor_id',$fornecedorId)->get();
    // Página de Serviços Cadastrados
        return view('servicosCadastrados',compact('servicos', 'fornecedorId'));
    }

    public function logout()
    {
    // Pagina de Logout
        return view('logout');
    }

    public function cadastro()
    {
     // Página de Cadastro
        return view('cadastro');   
    }

    public function cadastroFornecedor()
    {
        // Pagina de Cadastro do Fornecedor
        return view ('cadastroFornecedor');
    }

  
}
