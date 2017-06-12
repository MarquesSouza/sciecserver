<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Sciec - Acompanhe seus Eventos!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Bem Vindo!</strong> - Por favor, faça seu Login!</div>
            <form action="{{ route('login') }}" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id=email type="email" class="form-control" name="email"
                               placeholder="Insira seu e-mail..." value="{{ old('email') }}" required autofocus/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Senha"
                               required/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="{{ route('password.request') }}" class="btn btn-link btn-block">Esqueceu sua senha?</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2017 Sciec
            </div>
            <div class="pull-right">
                <a href="#">About</a> |
                <a href="#">Privacidade</a> |
                <a href="#">Contato</a>
            </div>
            <br><br>
            <div class="col-md-12">
                <a href="{{ url('register') }}"> <!--Adicionar Rotas-->
                    <button class="btn btn-success btn-block">
                        Cadastre-se
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- START PRELOADS -->
<audio id="audio-alert" src="{{ asset('audio/alert.mp3') }}" preload="auto"></audio>
<audio id="audio-fail" src="{{ asset('audio/fail.mp3') }}" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery/bootstrap.min.js') }}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='{{ asset('js/plugins/icheck/icheck.min.js') }}'></script>
<script type="text/javascript" src="{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/morris/raphael-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/rickshaw/d3.v3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/rickshaw/rickshaw.min.js') }}"></script>
<script type='text/javascript' src='{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js') }}'></script>
<script type="text/javascript" src="{{ asset('js/plugins/owl/owl.carousel.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/actions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/demo_dashboard.js') }}"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>
