@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Tipo de Atividade de Usuario</center>
    </h1>
    <form class="form-horizontal">
        <fieldset>

            @include('tipo_de_atividade_de_usuario._form');
        </fieldset>
    </form>

@endsection
