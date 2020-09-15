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
    <link rel="stylesheet" href="{{ asset ('css/cadastrarServico.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/tabela.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <div>
        <nav style="background-color: #0e0e0e;" class=" push">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down nav-sub">
                    <li> <button class="menu-btn">&#9776; </button></li>
                    <li> <button class="button-exit"><a href="{{ route('login') }}">Sair</a></button></li>
                </ul>
            </div>
        </nav>

        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">

                <a href="{{ route('index') }}"> <img class="logo-hv" src="img/logo-black.PNG" alt="Logo HubEvents"></a>
                <ul class="menu">

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

        <div>

            <h5 class="cadastrarServico">Cadastrar Serviços</h5>

        </div>
        <div class="modal-body">
            <form action="/servicos" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label class="services" for="service">Serviços *</label><br>
                    <select name="service" id="service">
                        <option disabled selected>Escolha uma opção</option>
                        <option value="Copeiro">Copeiro(a)</option>
                        <option value="Cozinheiro">Cozinheiro(a)</option>
                        <option value="Churrasqueiro">Churrasqueiro</option>
                        <option value="Casamento">Decoração - Festa de casamento</option>
                        <option value="Festas Infantis ">Decoração - Festas infantis</option>
                        <option value="Festas Juvenis">Decoração - Festas juvenis</option>
                        <option value="Doces">Doces</option>
                        <option value="Garçons">Garçon/Garçonete</option>
                        <option value="Salão de Festas">Salão de Festa</option>
                        <option value="Salgados">salgados</option>
                    </select>
                </div>
<!-- id e name com o mesmo atributo e o for -->

                <div class="form-group">
                    <label for="valor" class="col-form-label value">Valor *</label>
                    <input class="form-control" placeholder="R$ 00,00" name="valor" id="valor">
                </div>

                <div class="form-group">
                    <label class="service-description" for="descricao" class="col-form-label">Descrição do
                        serviço</label><br>
                    <textarea name="descricao" id="descricao" placeholder="Escreva..." rows="2" cols="49"></textarea>
                </div>
                <div class="form-group">
                    <label for="pagamento" class="col-form-label pag">Formas de pagamento *</label><br>
                    <textarea name="pagamento" id="pagamento" placeholder="Escreva..." rows="2" cols="49"></textarea>
                </div>
            

            <div class="form-group upload-photos">
                <div class='upload-photos-style'>
                    <img src="img/photo-upload.svg" alt="icone de foto">
                    <label class="photos" for="foto">Fotos</label><br>
                </div>
                <div class='upload-photos-style-two'>
                    <img src="img/cloud-computing.svg" alt="icone de upload">
                    <p>Click no botão e selecione uma arquivo de cada vez</p>
                    <input class="photos-button" type="file" id ="foto" name="foto">
                </div>
            </div>

            <ul class="verification-photos">
                <li>Máximo 3 fotos</li>
                <li>Tipos de arquivos aceitos: JPG, PNG, JPEG</li>
            </ul>

        </div>

        <div class="modal-footer">
            <button type="submit" class="btn">Salvar</button>
        </div>
        @csrf
        </form>
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