<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HubEvents</title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset ('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/demo.css')}}">
    <!-- Pushy CSS -->

    <link rel="stylesheet" href="{{ asset ('css/pushy.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/modal.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset ('css/tabela.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset ('css/servicosCadastrados.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/descricaoServico2.css')}}">
</head>

<body>

    
    <div>
        <nav style="background-color: #0e0e0e;" class=" push">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"></a>
                <ul id="nav-mobile " class="right hide-on-med-and-down nav-sub">
                    <li> <button class="menu-btn">&#9776; </button></li>
                    <li> 
                        <form action="/logout" method="POST">
                            <button class="button-exit" type="submit">Sair</button>
                             @csrf
                        </form>
                        
                    
                    </li>

                 
                </ul>
            </div>
        </nav>

        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">

                <a href="{{ route('index') }}"> <img class="logo-hv" src="img/logo-black.PNG" alt="Logo HubEvents"></a>
                <ul class="menu!" style="background-color: #0e0e0e">

                    <li class="pushy-submenu">
                        <a href="{{ route('home') }}">Página inicial</a>
                    </li>
                    <li>
                        <a class="pushy-submenu" href="{{ route('cadastrarServicos') }}">
                            Cadastrar serviço
                        </a>
                    </li>
                    <li class="pushy-submenu">
                        <a href="{{ route('servicosCadastrados') }}">Serviços cadastrados</a>
                    </li>
                    <li class="pushy-submenu">
                        <a href="#">Editar perfil</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>

    <div class="site-overlay"></div>

    <!-- Your Content -->
    <div id="container">
        <h1 class="service-h1">Serviços cadastrados</h1>


        <div class="notification">
            <section class="opcoes">
                @foreach ($servicos as $servico)
                <nav class="nav-cards">
                <img class="cards" src="{{url("storage/".$servico->foto)}}" alt="">
                <p class="texto_servico">{{$servico->nome}}</p>
                <button  type="button" class="verMais btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#servico{{$servico->id}}">Ver Mais</button>
                </nav>
            
                <div class="modal fade" id="servico{{$servico->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title TituloModalCentralizado">{{$servico->nome}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <section>
                               <div class="descricao">  <!-- uma DIV para cada parte-->
                              <p>
                                  {{$servico->descricao}} 
                                  
                              </p>
                              <br>
                              <img class="imagemDescricao" src="{{url("storage/".$servico->foto)}}" alt="churrasco">
                            
                              <br>
                          </div> 
                  
                          <div> <!-- uma DIV para cada parte-->
                              {{-- <nav class="nav-contratar">
                                  <button type="button" class="btn btn-secondary btn-sm contratar">Contratar Serviço</button>
                                  <button type="button" class="btn btn-secondary btn-sm contratar" data-toggle="modal" data-target="#exampleModal" data-whatever="@contato">Enviar Mensagem</button>
                                  <button type="button" class="btn btn-secondary btn-sm contratar">Tenho Interesse</button>
                              </nav> --}}
            
                                {{-- Modal para enviar mensagem  --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    {{-- <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Destinatário:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Mensagem:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" id="mensagem-sucesso">Enviar</button>
                                </div>
                                </div>
                            </div>
                        </div> 
                          </div>   
            
                                 
                      
            
                          <div> <!-- uma DIV para cada parte-->
                              <br>
                              <nav class="pagamento">
                                  <div class="valores">
                                     Valor: R$ {{$servico->valor}}                   
                                  </div> 
                                  <div class="valores">
                                      Formas de pagamento: {{$servico->forma_de_pagamento}}                   
                                  </div> 
                              </nav>
                          </div>
            
                          </section>
            
                    
            
            
                  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                          {{-- <button type="button" class="btn btn-primary btn-sm">Salvar mudanças</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>
            
             
            
            
               @endforeach
                </section>

           

        </div>

    </div>

    <!--  <footer class="site-footer push">This is a footer</footer> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/pushy.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>