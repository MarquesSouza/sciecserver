@extends('home')

@section('content')

    <h1>
        <center>Cadastrar Tipo de Usuário</center>
    </h1>
    <form class="form-horizontal">
        <fieldset>

            @include('form._form1');
            @include('tipo_de_usuario._form');

        </fieldset>
    </form>

@endsection
