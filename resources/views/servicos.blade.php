<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
  <link rel="stylesheet" href="{{ asset ('css/descricaoServico2.css')}}">
  <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">
  
  <title>HubEvents</title>
</head>
<body>
    <header class="menu pb-10">
        <nav class="navbar navbar-expand-lg navbar-dark">
             <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="img/image3800.png" alt="HubEvents">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicos') }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Promover Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginCliente') }}"><button type="button" class="btn btn-outline-secondary btn-sm botaologin">Login</button></a>
                </li>
                </ul>
            </div>
        </nav>   
    </header>

    <section>
        <nav class="navbar navbar-light bg-light d-flex justify-content-center py-4">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Eventos" aria-label="Pesquisar">
              <button class="procurar btn btn-outline-secondary my-3 my-sm-1" type="submit">Procurar</button>
            </form>
        </nav>
    </section>

  <section class="opcoes">
    
   @foreach ($servicos as $servico)
    <nav class="nav-cards">
    <img class="cards" src="./img/churrascosrjoao.jpg" alt="">
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
                  <img class="imagemDescricao" src="./img/churrascosrjoao.jpg" alt="churrasco">
                
                  <br>
              </div> 
      
              <div> <!-- uma DIV para cada parte-->
                  <nav class="nav-contratar">
                      <button type="button" class="btn btn-secondary btn-sm contratar">Contratar Serviço</button>
                      <button type="button" class="btn btn-secondary btn-sm contratar">Enviar Mensagem</button>
                      <button type="button" class="btn btn-secondary btn-sm contratar">Tenho Interesse</button>
                  </nav>
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
              <button type="button" class="btn btn-primary btn-sm">Salvar mudanças</button>
            </div>
          </div>
        </div>
      </div>

   @endforeach

        
  </section>

  {{$servicos->links()}}
  
  <footer>
    <div id="location-section">
        <div class="container">
            <div class="row margem-top pt-1">
                <div class="col-md-4">
                    <h4>Localização</h4>
                    <p>Av. Emilio Ribas 1056 - <br>Guarulhos SP</p>
                </div>
                <div class="col-md-4">
                    <h4>Siga-nos</h4>
                    <div id="social-media">
                        <a href=""><img src="img/facebook.png" alt="facebook"></a>
                        <a href=""><img src="img/twitter.png" alt="twitter"></a>
                        <a href=""><img src="img/linkedin.png" alt="linkedin"></a>
                        <a href=""><img src="img/instagram.png" alt="instagram"></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <h4>Contatos</h4>
                        <p> 
                            (11) 2525-9898  |  (11) 3235-7458 <br>
                            contato@hubvents.com.br
                        </p>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright-section">
        <p class="rodape">copyright &copy hub events</p>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>
</html>