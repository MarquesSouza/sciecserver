<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Sciec - Acompanhe seus Eventos!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/theme-default.css')}}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">
    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START BARRA DE NAVEGAÇÃO LATERAL -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="{{'/'}}">Sciec</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="{{asset('assets/images/users/no-image.jpg')}}" alt="John Doe"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{asset('assets/images/users/no-image.jpg')}}" alt="John Doe"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">{{ Auth::user()->name }}</div>
                        <div class="profile-data-title">Tipo do Usuario</div>
                    </div>

                </div>
            </li>
            <!-- INICIO MENU EVENTOS-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-university"></span><span class="xn-text">Eventos</span></a>
                <ul>
                    <li><a href="{{url('evento/cad')}}">Cadastrar</a></li>
                    <li><a href="{{url('evento/index')}}">Listar</a></li>
                </ul>
            </li>
            <!-- FINAL MENU EVENTOS-->

            <!-- INICIO MENU INSTITUIÇÕES-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-university"></span> <span class="xn-text">Instituição</span></a>
                <ul>
                    <li><a href="instituicao/cad">Cadastrar</a></li>
                    <li><a href="instituicao/index">Listar</a></li>
                </ul>
            </li>
            <!-- FINAL MENU INSTITUIÇÕES-->

            <!-- INICIO MENU CURSO-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-university"></span> <span class="xn-text">Curso</span></a>
                <ul>
                    <li><a href="curso/cad">Cadastrar</a></li>
                    <li><a href="curso/index">Listar</a></li>
                </ul>
            </li>
            <!-- FINAL MENU CURSO-->

            <!-- INICIO MENU USUÁRIO-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Usuário</span></a>
                <ul>
                    <li><a href="usuario/cad">Cadastrar</a></li>
                    <li><a href="usuario/index">Listar</a></li>
                    <!-- INICIO MENU TIPO DE USUÁRIO-->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user-md"></span> Tipos de Usuário</a>
                        <ul>
                            <li><a href="usuario/config/cad">Cadastrar</a></li>
                            <li><a href="usuario/config/index">Listar</a></li>
                        </ul>
                    </li>
                    <!-- FINAL MENU TIPO DE USUÁRIO-->
                    <!-- INICIO MENU TIPO DE ATIVIDADE DO USUÁRIO-->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user-md"></span> Tipo de Atividade do Usuário</a>
                        <ul>
                            <li><a href="usuario/atividade/config/cad">Cadastrar</a></li>
                            <li><a href="usuario/atividade/config/index">Listar</a></li>
                        </ul>
                    </li>
                    <!-- FINAL MENU TIPO DE ATIVIDADE DO USUÁRIO-->

                </ul>
            </li>
            <!-- FINAL MENU USUÁRIO-->

            <!-- INICIO MENU ATIVIDADES-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Atividade</span></a>
                <ul>
                    <li><a href="evento/{id_evento}/atividade/cad">Cadastrar</a></li>
                    <li><a href="evento/{id_evento}/atividade/index">Listar</a></li>
                    <!-- INICIO MENU TIPOS DE ATIVIDADES-->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user-md"></span> Tipo de Atividade</a>
                        <ul>
                            <li><a href="atividade/config/cad">Cadastrar</a></li>
                            <li><a href="atividade/config/index">Listar</a></li>
                        </ul>
                    </li>
                    <!-- FINAL MENU TIPOS DE ATIVIDADES-->
                </ul>
            </li>
            <!-- FINAL MENU ATIVIDADES-->

            <!-- INICIO MENU ARTIGOS-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-university"></span> <span class="xn-text">Artigos</span></a>
                <ul>
                    <li><a href="artigo/cad">Cadastrar</a></li>
                    <li><a href="artigo/index">Listar</a></li>
                </ul>
            </li>
            <!-- FINAL MENU ARTIGOS-->

            <!-- INICIO MENU PARTICIPAÇÃO-->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-university"></span> <span class="xn-text">Participação</span></a>
                <ul>
                    <li><a href="participacao/cad">Cadastrar</a></li>
                    <li><a href="participacao/index">Listar</a></li>
                </ul>
            </li>
            <!-- FINAL MENU PARTICIPAÇÃO-->
        </ul>
        <!-- END BARRA DE NAVEGAÇÃO LATERAL -->
    </div>
    <!-- END PAGE SIDEBAR -->
    <!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- BARRA DE NAVEGAÇÃO SUPERIOR -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <!-- SIGN OUT -->
            <li class="pull-right">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span>Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <!-- END SIGN OUT -->
        </ul>
        <!-- END BARRA DE NAVEGAÇÃO SUPERIOR -->
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Lista de Eventos</li>
        </ul>
        <!-- END BREADCRUMB -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            @yield('content')
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>

    <!-- END PAGE CONTENT -->
</div>

<!-- END PAGE CONTAINER -->
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>

<script type="text/javascript" src="js/plugins/moment.min.js"></script>
<script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- END THIS PAGE PLUGINS-->

<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/actions.js"></script>
<script type="text/javascript" src="js/demo_dashboard.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>






