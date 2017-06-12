@extends('app')
@section('content')
<div class="container-fluid">
    <h1 class="text-center">Cadastrar Atividade</h1>
    <form class="form-horizontal" method="post" action="{{ url('atividade/store') }}">
        {{csrf_field()}}
        <fieldset>
            @include('atividade._form');
        </fieldset>
    </form>
</div>
@endsection