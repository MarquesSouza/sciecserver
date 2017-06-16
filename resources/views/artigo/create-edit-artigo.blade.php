<!-- Form Name -->
@extends('app')

@section('content')
    @if( isset($articles))
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                            <form class="form-horizontal" method="post"
                                  action="{{ url('artigo/update', $articles->id) }}">
                                {!! method_field('PUT') !!}
                                @else
                                    <form class="form-horizontal" method="post" action="{{ url('artigo/store') }}">
                                        @endif
                                        {{csrf_field()}}
                                                <div class="panel-heading">
                                                    <h2 class="panel-title text-center"><strong>{{$titulo}}</strong></h2>
                                                </div>
                                                @if(isset($errors) && count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        @foreach($errors->all() as $error)
                                                            {{$error}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!-- START DEFAULT DATATABLE -->
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label"
                                                                               for="titulo">Titulo</label>
                                                                        <div class="col-md-6 col-xs-12">
                                                                            <input id="titulo" name="titulo" type="text"
                                                                                   placeholder="titulo"
                                                                                   class="form-control"
                                                                                   required=""
                                                                                   value="{{$articles->titulo or old('titulo')}}">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Text input-->
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label"
                                                                               for="subtitulo">SubTitulo</label>
                                                                        <div class="col-md-6 col-xs-12">
                                                                            <input id="subtitulo" name="subtitulo"
                                                                                   type="text"
                                                                                   placeholder="subtitulo"
                                                                                   class="form-control input-md"
                                                                                   required=""
                                                                                   value="{{$articles->subtitulo or old('subtitulo')}}">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Textarea -->
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label"
                                                                               for="resulmo">Resumo</label>
                                                                        <div class="col-md-6 col-xs-12">
                            <textarea
                                    class="form-control" id="resulmo" name="resulmo form-control input-md" required="">

                            </textarea>
                                                                        </div>
                                                                    </div>


                                                                    <!-- Text input-->
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label"
                                                                               for="autores">Autores</label>
                                                                        <div class="col-md-6 col-xs-12">
                                                                            <input id="autores" name="autores"
                                                                                   type="text" placeholder=""
                                                                                   class="form-control input-md"
                                                                                   required=""
                                                                                   value="{{$articles->autores or old('autores')}}">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Text input-->
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label"
                                                                               for="local">Local</label>
                                                                        <div class="col-md-6 col-xs-12">
                                                                            <input id="local" name="local" type="text"
                                                                                   placeholder=""
                                                                                   class="form-control input-md"
                                                                                   required=""
                                                                                   value="{{$articles->local or old('local')}}">
                                                                        </div>
                                                                    </div>

                                                                    <input id="situacao" name="situacao" type="hidden"
                                                                           value="em espera">
                                                                    <input type="hidden" name="status" value="1">

                                                                    <!-- Button -->
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label"
                                                                               for=""></label>
                                                                        <div class="col-md-6 col-xs-12">
                                                                            <button id="" name=""
                                                                                    class="btn btn-primary">Salvar
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            </form>
                    </div>
                </div>
            </div>

@endsection
