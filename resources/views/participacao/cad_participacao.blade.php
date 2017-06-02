@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Participação</center>
    </h1>
    <form class="form-horizontal">
        <fieldset>

            @include('participacao._form');
        </fieldset>
    </form>

@endsection
