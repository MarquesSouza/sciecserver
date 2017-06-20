@extends('app')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Cadastrar Atividade</h1>

            @if( isset($activity))
                <form class="form-horizontal" method="post" action="{{ url('evento/'.$evento->id.'/atividade/update', $activity->id) }}">
                    {!! method_field('PUT') !!}
                    @else
                        <form class="form-horizontal" method="post" action="{{ url('evento/'.$evento->id.'/atividade/store') }}">
                            @endif
            {{csrf_field()}}
            <fieldset>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Nome</label>
                    <div class="col-md-6 col-xs-12">
                        <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required=""
                               value="{{$activity->nome or old('nome')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Descrição</label>
                    <div class="col-md-6 col-xs-12">
                        <input id="descricao" name="descricao" type="text" placeholder=""
                               class="form-control input-md" required=""  value="{{$activity->descricao or old('descricao')}}">

                    </div>
                </div>

                <!-- Local do Evento -->
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label" for="local">Local</label>
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-home"></span></span>
                            <input id="local" name="local" type="text" placeholder="Local"
                                   class="form-control" required=""  value="{{$activity->local or old('local')}}">
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
                                   class="form-control " required=""  value="{{$activity->data_inicio or old('data_inicio')}}">
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
                                   placeholder="Selecione" class="form-control " required="" value="{{$activity->data_conclusao or old('data_conclusao')}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label" for="hora">Carga Horária</label>
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                            <input id="hora" name="hora" type="time" placeholder="Ex: '01:00'"
                                   class="form-control" required="" value="{{$activity->hora or old('hora')}}">
                        </div>

                    </div>
                </div>
                <!-- Dtq de Inscritos-->
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label" for="qtd_inscritos">Quantidade de Inscritos</label>
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                            <input id="qtd_inscritos" name="qtd_inscritos" type="text" placeholder="Quantidade Máxima de Inscritos"
                                   class="form-control" required="" value="{{$activity->qtd_inscritos or old('qtd_inscritos')}}">
                        </div>
                    </div>
                </div>
                <!-- Local da Atividade-->
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label" for="cod_inscritos">Código de Inscrição</label>
                    <div class="col-md-6 col-xs-12">
                        <input id="cod_inscritos" name="cod_inscritos" type="text" placeholder=""
                               class="form-control input-md" required="" value="{{$activity->cod_inscritos or old('cod_inscritos')}}">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label" for="selectbasic"> Tipo de Atividade</label>
                    <div class="col-md-6 col-xs-12">
                        <select id="selectbasic" name="id_tipo_atividade" class="form-control">
                            <option value="1">Palestra</option>
                            <option value="1">Minicurso</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="status" value="1">


                @if( isset($activity))

                        @else
                    <input type="hidden" name="id_evento" value="{{$evento->id}}">
                                @endif


                <div class="form-group">
                    <label class="col-md-4 control-label" for="cadastrar"></label>
                    <div class="col-md-4">
                        <button id="cadastrar" name="cadastrar" class="btn btn-success">Cadastrar</button>
                    </div>
                    <a href="#"> <!-- Inserir link para página anterior -->
                        <div class="col-md-4">
                            <button class="btn btn-danger">Voltar</button>
                        </div>
                    </a>
                </div>

            </fieldset>
        </form>
    </div>
@endsection