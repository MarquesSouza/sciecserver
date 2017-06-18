<!-- Form Name -->
@extends('app')

@section('content')

        @if( isset($participation))
            <form class="form-horizontal" method="post" action="{{ url('participacao/update', $participation->id) }}">
                {!! method_field('PUT') !!}
        @else
            <form class="form-horizontal" method="post" action="{{ url('participacao/store') }}">
        @endif

        {{csrf_field()}}
        <fieldset>
            <div class="container">
                <hr>
                <legend>{{$titulo}}</legend>
                @if(isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>

                @endif

                <div class="form-group">
                    <label class="col-md-4 control-label">Nome</label>
                    <div class="col-md-5">
                        <input id="nome" name="nome" type="text" placeholder=""
                               class="form-control input-md" required="" value="{{$participation->nome or old('nome')}}">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Descrição</label>
                    <div class="col-md-5">
                        <input id="descricao" name="descricao" type="text" placeholder=""
                               class="form-control input-md" required="" value="{{$participation->descricao or old('descricao')}}">

                    </div>
                </div>

                <input type="hidden" name="status" value="1">
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-4">
                        <button id="" name="" class="btn btn-primary">Salvar</button>
                        <a href="{{('participacao/list_participacao')}}">
                            <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
                        </a>

                    </div>
                </div>
            </div>
        </fieldset>
    </form>

    <!-- /.container -->

@endsection
