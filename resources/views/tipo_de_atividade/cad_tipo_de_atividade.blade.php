@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Tipo de Atividade</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('atividade/config/store') }}"  >
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

            @include('tipo_de_atividade._form');
        </fieldset>
    </form>

@endsection
