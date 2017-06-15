<!-- Form Name -->
@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if( isset($events))
                            <form class="form-horizontal" method="post" action="{{ url('evento/update', $events->id) }}">
                                {!! method_field('PUT') !!}
                                @else
                                    <form class="form-horizontal" method="post" action="{{ url('evento/store') }}">
                                        {{csrf_field()}}
                                        <fieldset>
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
                                                    <label class="col-md-3 control-label">Nome</label>
                                                    <div class="col-md-6">
                                                        <input id="nome" name="nome" type="text" placeholder=""
                                                               class="form-control input-md" required="" value="{{$events->nome or old('nome')}}">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Logo do Evento</label>
                                                    <div class="col-md-6">
                                                        <input id="nome" name="nome" type="text" placeholder=""
                                                               class="form-control input-md" required="" value="{{$events->logoEvento or old('logoEvento')}}">
</div></div>
                                                        <div class="form-group">
                                                    <label class="col-md-3 control-label">Descrição</label>
                                                    <div class="col-md-6">
                                                        <input id="descricao" name="descricao" type="text" placeholder=""
                                                               class="form-control input-md" required="" value="{{$events->descricao or old('descricao')}}">

                                                    </div>
                                                </div>
                                                <input type="hidden" name="status" value="1">

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label" for="selectbasic">Curso</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <select id="id_curso" name="id_curso" class="form-control select">
                                                        @forelse ( $cursos as $c) <!-- Aqui está pegando o Curso do Evento -->
                                                            <option value="{{$c->id}}">{{$c->nome}}</option>
                                                            @empty
                                                                <p>No type_users</p>
                                                            @endforelse
                                                        </select>
                                                        <span class="help-block">Selecione o Curso no Qual Será Vinculado ao Evento</span>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="status" value="1">
                                            @include('form._form2') <!-- Reaproveitamento de cógigo para formulários -->

                                                <!-- Button -->

                                                <!-- Button  -->
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label" for="singlebutton"></label>
                                                    <div class="btn-block">
                                                        <button id="singlebutton" name="singlebutton" class="btn btn-success">Cadastrar</button>
                                                        <a href="{{('/')}}">
                                                            <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
                                                        </a>
                                                    </div>
                                                </div>
                                        </fieldset>
                                    </form>

                                    <!-- /.container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
