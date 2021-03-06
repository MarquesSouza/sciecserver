@extends('app2')
@section('content')
    @if( isset($typeActivityUser))
        <form class="form-horizontal" method="post"
              action="{{ url('usuario/tipo/atividade/update', $typeActivityUser->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('usuario/tipo/atividade/store') }}">
                    @endif

                    {{csrf_field()}}
                    <fieldset>
                        <div class="container">
                            <hr>
                            <h1 class="text-center">{{$titulo}}</h1>
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
                                <label class="col-md-3 control-label">Nome</label>
                                <div class="col-md-6">
                                    <input id="nome" name="nome" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$typeActivityUser->nome or old('nome')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Descrição</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-file-text"></span></span>
                                        <input id="descricao" name="descricao" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$typeActivityUser->descricao or old('descricao')}}">
                                    </div>
                                 </div>
                            </div>
                            <input type="hidden" name="status" value="1">

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-5 control-label" for=""></label>
                                <div class="col-md-5">
                                    <button id="" name="" class="btn btn-primary">Cadastrar</button>
                                    <a href="{{('tipo_de_atividade_de_usuario/list_tipo_de_atividade_de_usuario')}}">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
@endsection
