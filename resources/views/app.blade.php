<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sciec</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vtp.css') }}">
    <link rel="stylesheet" href={{ asset('css/mdb.css') }}>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--  Barra de navegação fixa -->
<nav class="navbar navbar-default navbar-fixed-top navbar-static-top">
    <div class="container-fluid">
        <div class="nav navbar-nav navbar-text">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}"><img src="{{ asset('imagens/logosciecp.png') }}" height="50px" width="125px"></a> <!--Adicionar Rotas-->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-brand">
                <li><a style="color: #2a88bd" href="{{ url('/') }}">Página Inicial<span class="sr-only">(current)</span></a></li>
                <li>
                    <a style="color: #2a88bd" href="{{url('evento/index')}}" >Eventos</a>

                </li>
                <li>
                    <a style="color: #2a88bd" href="{{url('evento/index')}}" >Muda link</a>

                </li>
                <li>
                    <a style="color: #2a88bd" href="{{url('evento/index')}}" >Certificados</a>

                </li>
                <li>
                    <a style="color: #2a88bd" href="{{url('evento/index')}}" >Artigos</a>

                </li>
                <li>
                    <a style="color: #2a88bd" href="{{url('evento/index')}}" >Informações</a>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right text-center ">
                @if (Auth::guest())
                        <li><a href="{{ url('login') }}"> <!--Adicionar Rotas-->
                                <button class="btn btn-primary">
                                    <i class="fa fa-search fa-fw"></i>
                                    Login
                                </button>
                            </a></li>
                        <li><a href="{{ url('register') }}"> <!--Adicionar Rotas-->
                                <button class="btn btn-success">
                                    <i class="fa fa-search fa-fw"></i>
                                    Cadastre-se
                                </button>
                            </a></li>

                @else
                        <li class="dropdown">
                            <a href="#" style="color: #2a88bd" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<body>
<div>
    <a href="#top" class="glyphicon glyphicon-chevron-up"></a>
</div>
</body>

@yield('body')

<!--Footer-->
<footer class="footer page-footer green center-on-small-only-only">
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title"></h5>
                <p>Links Úteis sobre Eventos</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title"></h5>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title"></h5>
            </div>
            <!--/.Third column-->
            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title"></h5>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://ifto.paraiso.edu.br"  rel="nofollow"> 5º Periodo S.I IFTO - Campus Paraíso </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
@yield('footer')


<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Bootstrap core JavaScript
           ================================================== -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vtp.js') }}"></script>
</body>
</html>
