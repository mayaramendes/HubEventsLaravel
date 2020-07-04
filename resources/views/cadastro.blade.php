<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset ('css/cadastro.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">
    <title>HubEvents</title>

</head>

<body>
    <div class="col-md-12">
        <div class="col-md-6 box">
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <form action="Cadastro.html" method="POST"></form>
                    <label for="nomeCompleto">Nome Completo</label>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control input-laranja">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label>Eu sou:</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-6">
                    <div class="form-group" style="padding-left:0px;">
                        <input type="checkbox" class="input-laranja">
                        <label>Pessoa Física</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-left:0px;">
                        <input type="checkbox" class="input-laranja">
                        <label>Pessoa Jurídica</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control input-laranja">
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control input-laranja">
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="form-group">
                    <label for="confirmarSenha">Confirmar Senha</label>
                    <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control input-laranja">
                </div>
            </div>
        </div>

        <div class="col-md-6 direita">
            <div class="text-center" style="height: 90%;">
                <div>
                 <a href="{{ route('index') }}">  <img src="img/log-transparente - Copia.png"> </a> 
                </div>
            </div>

            <div class="text-center">
                <button class="button-proximo" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado"> Próximo </button>

                <button class="button-cancelar" type="button" class="btn btn-primary"> Cancelar </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border: none;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="color: orange; opacity: initial;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <p>Para que seu cadastro seja finalizado, <br>precisamos saber o seu objetivo no HUB EVENTS
                        </p>
                        <div class="form-group">
                            <label>Eu Quero :</label>
                        </div>
                        <div class="col-md-6 col-sm 8">
                            <div class="form-group">
                                <label>Contratar Serviços</label>
                                <input type="checkbox" class="form-group input-laranja">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Oferecer Serviços</label>
                                <input type="checkbox" class="form-group input-laranja">
                            </div>
                        </div>
                        <!--                             <div class="row">
                                <div class="col-md-12">
                                    <button class="button-finalizar" type="button" class="btn btn-primary">Finalizar</button>
                                </div>
                            </div> -->
                    </div>
                    <div class="modal-footer text-center" style="display: block; border: none;">
                        <button class="button-finalizar" type="button" class="btn btn-primary">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>