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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800|Lily+Script+One|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Roboto:400,900,700,500,300,100" rel="stylesheet" type="text/css">
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



            <!-- INICIO MENU MEUS CERTIFICADOS-->
            <li class="glyphicon-menu-down">
                <a href="{{url('certificado/index')}}"><span class="fa fa-certificate"></span> <span class="xn-text">Meus Certificados</span></a>
            </li>
            <!-- FINAL MENU MEUS CERTIFICADOS-->

            <!-- INICIO MENU MEUS EVENTOS-->
            <li class="glyphicon-menu-down">
                <a href="{{url('evento/eventos')}}"><span class="fa fa-calendar"></span> <span class="xn-text">Meus Eventos</span></a>
            </li>
            <!-- FINAL MENU MEUS EVENTOS-->

            <!-- INICIO MENU MINHAS ATIVIDADES-->
            <li class="glyphicon-menu-down">
                <a href="{{url('#')}}"><span class="fa fa-history"></span> <span class="xn-text">Minhas Atividades</span></a>
            </li>

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
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables</li>
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
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='{{asset('js/plugins/icheck/icheck.min.js')}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
<script type='text/javascript' src='{{asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/fileinput/fileinput.min.js')}}"></script>
<!-- END THIS PAGE PLUGINS-->

<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/demo_dashboard.js')}}"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>