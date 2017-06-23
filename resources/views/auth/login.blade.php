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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800|Lily+Script+One|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Roboto:400,900,700,500,300,100" rel="stylesheet" type="text/css">
    <!-- CSS INCLUDE -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container lightmode">

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
                        <a  href="{{ route('password.request') }}" name="" class="btn btn-link btn-block">Esqueceu sua senha?</a>
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
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery/bootstrap.min.js') }}"></script>
<!-- END PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/actions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/demo_dashboard.js') }}"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>
