<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
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
                    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-outline-secondary btn-sm botaologin">Login</button></a>
                </li>
                </ul>
            </div>
        </nav>     
    </header>

    <section id="servicos" class="pt-1">
        <div class="container">
            <div class="row">
                <div class="col py-4">
                    <h5>Encontre os melhores eventos</h5>
                </div>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block imagens" src="img/casamento1.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block pb-5">
                            <div class="frase-carrossel">Planeje seu casamento</div> 
                            <p class="frase-carrossel">Com todo conforto e viabilidade</p>
                        </div>
                </div>  
                <div class="carousel-item ">
                    <img class="d-block imagens" src="img/churrasco1.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block pb-5">
                            <div class="frase-carrossel">Seu churrasco</div>
                            <p class="frase-carrossel">Com facilidade e preço justo</p>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block imagens" src="img/festa1.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block pb-5">
                            <div class="frase-carrossel">Faça sua festa</div>
                            <p class="frase-carrossel">Onde quiser e com praticidade</p>
                        </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
         </div>
    </section>

    <section>
        <nav class="navbar navbar-light bg-light d-flex justify-content-center py-5">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Eventos" aria-label="Pesquisar">
              <button class="procurar btn btn-outline-secondary my-3 my-sm-1" type="submit">Procurar</button>
            </form>
        </nav>
    </section>
   
 <footer>
    <div id="location-section">
        <div class="container pt-5">
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
                    <h4>A Hub Events</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Consequatur similique quia tempore magni velit enim?
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

