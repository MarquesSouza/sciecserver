@extends('home')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Tipo de Usuário</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('usuario/config/store') }}"  >
        {{csrf_field()}}
        <fieldset>


            @include('tipo_de_usuario._form');

        </fieldset>
    </form>

@endsection
