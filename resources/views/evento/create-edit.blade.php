<!-- Form Name -->
@extends('app2')

@section('content')
    @if( isset($event))
        <form class="form-horizontal" method="post" action="{{ url('evento/update', $event->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('evento/store') }}">
                    @endif
                    {{csrf_field()}}
                    <fieldset>
                        <div class="container-fluid">
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
                                <label class="col-md-3 col-xs-12 control-label">Nome</label>
                                <div class="col-md-6 col-xs-12">
                                    <input id="nome" name="nome" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$event->nome or old('nome')}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Descrição</label>
                                <div class="col-md-6 col-xs-12">
                                    <input id="descricao" name="descricao" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$event->descricao or old('descricao')}}">

                                </div>
                            </div>


                            <!-- Local do Evento -->
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label" for="local">Local</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                        <input id="local" name="local" type="text" placeholder="Local"
                                               class="form-control"required="" value="{{$event->local or old('local')}}">
                                    </div>
                                </div>
                            </div>

                            <!-- Data de Início-->
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label" for="data_inicio">Data de Início</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input id="data_inicio" name="data_inicio" type="datetime-local" placeholder="Selecione"
                                               class="form-control " required=""  value="{{$event->data_inicio or old('data_inicio')}}">
                                    </div>
                                </div>
                            </div>

                            <!-- Data de Conclusão-->
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label" for="data_conclusao">Data de Encerramento</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input id="data_conclusao" name="data_conclusao" type="datetime-local"
                                               placeholder="Selecione" class="form-control " required="" value="{{$event->data_conclusao or old('data_conclusao')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Logo do Evento</label>
                                <div class="col-md-6 col-xs-12">
                                    <input id="logoEvento" name="logoEvento"
                                           placeholder="" class="form-control input-md" required=""
                                           type="file" value="{{$event->logoEvento or old('logoEvento')}}">

                                </div>
                            </div>

                            <input type="hidden" name="status" value="1">

                            <!-- Button -->
                            <br> <br> <br>
                            <div class="form-group">
                                <label class="col-md-5 control-label" for=""></label>
                                <div class="col-md-5">
                                    <button id="" name="" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <!-- /.container -->

@endsection
