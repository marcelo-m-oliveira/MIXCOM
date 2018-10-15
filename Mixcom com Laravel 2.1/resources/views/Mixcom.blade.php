<!DOCTYPE html>
<!--
* Desenvolvido por: Marcelo Moreira de Oliveira e Lucas de Sousa
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIXCOM Relógios de Ponto - Feira de Santana - Bahia</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="#" href="imagens/logo.png">
</head>

<body class="cor-fundo">
    <!--Barra de navegação-->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style=" background-color: #e3f2fd; ">
            <a class="navbar-brand" href="#">
                <img class="img-responsive" src="imagens/logo.png" width="150px" class="img-responsive" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
                aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#Inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Produtos">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Linha de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Nossos Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Fale-conosco">Fale conosco</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cadastrar">Cadastrar</a>
                    </li>
                    <!--      <form class="form-inline my-5 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form> -->
                </ul>

            </div>
        </nav>
    </div>
    <!--Fim Barra de navegação-->
    <!--Inicio Slide-->
    <div id="Inicio">
        <div class="container-narrow">
            <div id="carouselSite" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselSite" data-slide-to="1"></li>
                    <li data-target="#carouselSite" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-responsive d-block w-100" src="imagens/banner.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="imagens/Produtos/banner01.jpg" class="rounded-circle img-responsive col-5">
                            <div class="col-8 text-justify">
                                <h1>Controlador
                                    de Acesso</h1>
                                <p>O Controlador de Acesso – MD 5705 é um
                                    equipamento
                                    prático e moderno
                                    para o
                                    controle de acesso através
                                    de comparação e identificação do padrão de impressões digitais. Pode ser utilizado
                                    em
                                    empresas de pequeno a grande
                                    porte. Controla a abertura de portas, catracas ou torniquetes, controlando o acesso
                                    através de um processo
                                    completamente a prova de fraudes.</p>
                                <a href="#" class="btn btn-outline-light mr-3">Saiba mais</a>
                                <a href="#" class="btn btn-outline-light">Compre já</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-responsive img-fluid d-block w-100" src="imagens/banner.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="imagens/Produtos/banner02.png" width="200px" class="rounded-circle img-responsive col-5"
                                    style="margin-bottom: -100px; margin-left: 650px; width: 700px;">
                                <div class="col-8 text-justify">
                                    <h1>Catraca RBC 5905 </h1>
                                    <p>A Catraca de Inox RBC 5905 é a melhor opção para o controle de acesso de sua
                                        empresa. A Catraca RBC 5905 possui
                                        eficiente leitura de impressão de digitais.</p>
                                    <a href="#" class="btn btn-outline-light mr-3">Saiba mais</a>
                                    <a href="#" class="btn btn-outline-light">Compre já</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-responsive d-block img-fluid w-100" src="imagens/banner.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Slide 3</h1>
                            <p class="lead">-----------------------</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Avançar</span>
                </a>
            </div>
        </div>
        <div id="Produtos"></div>
    </div>
    <!--Fim Slide-->
    <!--Produtos-->
    <div class="container">
        <h1 class="display-3 text-center my-5">Produtos</h1>
        <div class="card-deck">
            <div class="card">
                <img class="img-responsive card-img-top" src="imagens/100-salgados-fritos-para-festa.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">MD REP EVO</h5>
                    <p class="card-subtitle text-muted my-3">Madis MD REP REVO é o relógio perfeito para quem quer a segurança dos dados
                        de registro dos funcionários. Além disso, possui sistema próprio em nuvem para tratamento de pontos.
                    </p>
                    <a href="#" class="btn btn-outline-primary">Comprar R$ 2.000,00</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Relógio top</small>
                </div>
            </div>
            <div class="card">
                <img class="img-responsive card-img-top" src="imagens/esfirra-aberta-de-carne-para-diabeticos.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Inner Rep Plus</h5>
                    <p class="card-subtitle mb-2 text-muted my-3">Uma das melhores marcas no mercado, a TopData lançou 
                        seu mais novo equipamento: Inner Rep Plus, com módulo biomérico com agilidade de gravação e registro de ponto.
                    </output></p>
                    <a href="#" class="btn btn-outline-primary">Comprar R$ 2.000,00</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">A melhor biometria</small>
                </div>
            </div>
            <div class="card">
                <img class="img-responsive card-img-top my-auto" src="imagens/quibe-de-bacalhau.jpg " alt="">
                <div class="card-body">
                    <h5 class="card-title">iPointline</h5>
                    <p class="card-subtitle mb-2 text-muted my-3">A RW Tech vem sempre inovando em seus aparelhos.
                        O iPointline possui certificado INMETRO e oferece um sistema próprio de tratamento de pontos integrado
                        em nuvem.
                    </p>
                    <a href="#" class="btn btn-outline-primary">Comprar R$ 2.000,00</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Topissimo</small>
                </div>
            </div>
        </div>
    </div>
    <div align="center" class="container">
        <a class="btn btn-outline-primary my-4" href="Paginas/produtos2.html">Mais produtos</a>
    </div>

    <!--Fim Produtos-->
    <div class="container">
        <div class="col-12 mb-3">
            <hr>
        </div>
        <h1 class="display-3 text-center my-5">Seja Bem Vindo(a)!</h1>
        <p class="text-center lead">Apresentamos o nosso site. Totalmente interativo, moderno e de fácil navegação.
            Tem
            como
            objetivo mostrar a diversidade
            dos produtos e serviços oferecidos, nele, você também poderá solicitar orçamentos on-line. Sem dúvida é
            um
            canal que nos aproxima dos nossos atuais e futuros clientes. Aproveite. </p>

        </p>
    </div>
    <div class="container">
        <div class="col-12 mb-3">
            <hr>
        </div>
        <h1 class="display-3 text-center my-5">A empresa MIXCOM</h1>
        <p class="text-center lead">A Mixcom é uma empresa voltada para soluções de Ponto e Acesso, além de Softwares,
            somos Assistência
            Técnica Especializada e oferecemos Manutenção de Equipamentos, objetivando entender para atender
            a necessidade dos nossos clientes/parceiros através da venda consultiva, atuando com excelência
            e qualidade na prestação do serviço, conquistando assim, a satisfação dos seus clientes com dedicação
            e comprometimento.
        </p>
    </div>
    <!--Inicio Rodapé-->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <div class="col-md-4 ml-5">
                <h3 class="title">Localização</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124767.7071291072!2d-38.997715674099524!3d-12.248898366774933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71437971e302841%3A0xf1ba858abc569a83!2sMixcom+Controle+de+Ponto+e+Acesso!5e0!3m2!1spt-BR!2sbr!4v1535730800761"></iframe>
                </div>
            </div>
            <div class=" col-sm-4 ml-3">
                <h3>Contatos</h3>
                <div class="list-group text-center">
                    <p class="text-left">Telefone:(75) 3626.8508</p>
                    <p class="text-left">Alex Lira</p>
                    <p class="text-left">alexlira@mixcom.net.br</p>
                    <p class="text-left">Lívia Andrade</p>
                    <p class="text-left">livia@mixcom.net.br</p>
                </div>
            </div>

            <div class="col-sm-3">
                <h3>Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary my-2" href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a class="btn btn-outline-info my-2" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a class="btn btn-outline-danger my-2" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <a href="#" class="blockquote-footer">&copy; 2018 Desenvolvido pela <cite title="Titulo"> Equipe de
                            PFC
                            - MIXCOM</cite></a>
                </blockquote>

            </div>

        </div>
    </div>
    <!--Fim Rodapé-->
    <!--Inicio modal fale conosco-->
    <div class="modal fade" id="Fale-conosco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="idEmailLogin">Email</label>
                    <input type="email" name="E-mail" class="form-control my-2" placeholder="nome@exemplo.com">
                    <label for="#">Comentários</label>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Digite aqui seus comentérios."
                            rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-outline-success" type="submit">Enviar</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!--Fim modal fale conosco-->
    <!--Inicio modal login-->
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="" for="idEmailLogin">Email</label>
                            <input type="email" class="form-control" id="idEmailLogin" aria-describedby="emailHelp"
                                placeholder="nome@exemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="idSenhaLogin">Senha</label>
                            <input type="password" class="form-control" id="idSenhaLogin" placeholder="Digite sua Senha">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="idLogin">
                            <label class="form-check-label" for="idLogin">Manter conectado</label>
                        </div>
                        <button type="button" class="btn btn-outline-pprimary" type="submit">Entrar</button>
                        <div class="modal-footer my-4">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Fim modal login-->
    <!--Inicio modal Cadastro-->
    <div class="modal fade" id="Cadastrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <h3 class="display-6 text-center">Como deseja se cadastrar?</h3>
                        <div class="row ml-2 my-4">
                            <div class="ml-5">
                                <a href="#" class="btn btn-outline-primary">Pessoa Fisica</a>
                            </div>
                        </div>

                        <div class="container text-center">
                            <hr>
                            <blockquote class="blockquote text-center">Ou</blockquote>
                            <hr>
                        </div>

                        <div class="row ml-1 my-4">
                            <div class="ml-5">
                                <a href="{{ route('register') }}" class="btn btn-outline-primary">Pessoa Juridica</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fim modal Cadastro-->
    <div class="scrollup ">
        <a href="# ">
            <i class="icon-up-open"></i>
        </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery-3.3.1.min.js "></script>
</body>

</html>
