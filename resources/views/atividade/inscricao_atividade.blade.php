@extends('app2')
@section('content')

                <form class="form-horizontal" method="post" action="{{ url('evento/'.$id_evento.'/atividade/'.$id.'/insc_atividade') }}">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="container">
                            <hr>
                            <h1 class="text-center">Inscrição Atividade</h1>
                            @if(isset($errors) && count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="id_user"> Inscritos no Evento</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                        <select id="selectbasic" name="id_user" class="form-control">
                                            @foreach($lista as $t)
                                                <option value="{{$t->id}}">{{$t->name}}-{{$t->cpf}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="id_tipo_user"> Tipo de Inscrição</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                        <select id="selectbasic" name="id_tipo_user" class="form-control">
                                            @foreach($tipo as $t)
                                                <option value="{{$t->id}}">{{$t->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-5 control-label" for=""></label>
                                <div class="col-md-5">
                                    <button id="" name="" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
@endsection
