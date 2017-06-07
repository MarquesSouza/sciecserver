@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Tipo de Atividade</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('usuario/ativiade/config/store') }}"  >
        {{csrf_field()}}
        <fieldset>

            @include('tipo_de_atividade._form');
        </fieldset>
    </form>

@endsection
