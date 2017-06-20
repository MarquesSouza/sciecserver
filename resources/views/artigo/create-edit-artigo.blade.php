<!-- Form Name -->
@extends('app2')

@section('content')

    @if( isset($article))
        <form class="form-horizontal" method="post" action="{{ url('artigo/update', $article->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('artigo/store') }}">
                    @endif

                    {{csrf_field()}}
                    <div class="panel-heading">
                        <h2 class="panel-title text-center"><strong>{{$titulo}}</strong></h2>

                        @if(isset($errors) && count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>
                        @endif

                    </div>

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
                                                   value="{{$article->titulo or old('titulo')}}">
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
                                                   value="{{$article->subtitulo or old('subtitulo')}}">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"
                                               for="subtitulo">Resumo</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea id="resumo" name="resumo"
                                                   type="text"
                                                   placeholder=""
                                                   class="form-control input-md"
                                                   required="">{{$article->resumo or old('resumo')}}
                                            </textarea>
                                        </div>
                                    </div>              <!-- Textarea -->



                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"
                                               for="autores">Autores</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input id="autores" name="autores"
                                                   type="text" placeholder=""
                                                   class="form-control input-md"
                                                   required=""
                                                   value="{{$article->autores or old('autores')}}">
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
                                                   value="{{$article->local or old('local')}}">
                                        </div>
                                    </div>

                                    <input id="situacao" name="situacao" type="hidden"
                                           value="em espera">
                                    <input type="hidden" name="status" value="1">
                                    <input type="hidden" name="situacao" value="1">

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"
                                               for=""></label>
                                        <div class="col-md-6 col-xs-12">
                                            <button id="" name=""
                                                    class="btn btn-primary">Salvar
                                            </button>
                                            <a href="{{('artigo/list_artigo')}}">
                                                <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                </form>

                </form>
                </div>
                </div>
                </div>

@endsection
