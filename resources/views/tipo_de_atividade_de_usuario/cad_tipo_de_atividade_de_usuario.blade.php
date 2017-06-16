{{--
@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Tipo de Atividade do Usuário</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('usuario/atividade/config/store') }}"  >
        {{csrf_field()}}
        <fieldset>
            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @include('tipo_de_atividade_de_usuario._form');
        </fieldset>
    </form>

@endsection
--}}
//foi necessário desfazer esse formulario para fazer cadastro e atualização em um só  formulario
