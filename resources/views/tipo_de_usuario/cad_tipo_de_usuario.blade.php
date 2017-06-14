@extends('home')

@section('content')
    <h1>
        <center>Cadastrar Tipo de Usuário</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('usuario/config/store') }}">
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
            @include('tipo_de_usuario._form');
        </fieldset>
    </form>
@endsection
