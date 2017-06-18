<!-- Form Name -->
@extends('app')

@section('content')
    @if( isset($event))
        <form class="form-horizontal" method="post" action="{{ url('evento/update', $event->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('evento/store') }}">
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
                                           class="form-control input-md" required=""
                                           value="{{$event->nome or old('nome')}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descrição</label>
                                <div class="col-md-5">
                                    <input id="descricao" name="descricao" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$event->descricao or old('descricao')}}">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Local</label>
                                <div class="col-md-4">
                                    <input id="local" name="local" type="text" placeholder=""
                                           class="form-control input-md"
                                           required="" value="{{$event->local or old('local')}}">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Data de Início</label>
                                <div class="col-md-4">
                                    <input id="data_inicio" name="data_inicio" type="datetime-local" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$event->data_inicio or old('data_inicio')}}">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Data de Conclusão</label>
                                <div class="col-md-4">
                                    <input id="data_conclusao" name="data_conclusao" type="datetime-local"
                                           placeholder=""
                                           class="form-control input-md"
                                           required="" value="{{$event->data_conclusao or old('data_conclusao')}}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Logo do Evento</label>
                                <div class="col-md-5">
                                    <input id="logoEvento" name="logoEvento"
                                           placeholder="" class="form-control input-md" required=""
                                           type="file" value="{{$event->logoEvento or old('logoEvento')}}">

                                </div>
                            </div>

                            <input type="hidden" name="status" value="1">

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for=""></label>
                                <div class="col-md-4">
                                    <button id="" name="" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <!-- /.container -->

@endsection
