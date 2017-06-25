@extends('app2')
@section('content')
    @if( isset($users))
        <form class="form-horizontal" method="post" action="{{ url('usuario/update', $users->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('usuario/store') }}">
                {{csrf_field()}}
                    @endif

                    {{csrf_field()}}
                    <fieldset>
                        <div class="container">
                            <hr>
                            <h1 class="text-center">{{$titulo}}</h1>
                            @if(isset($errors) && count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="col-md-3 control-label">Nome</label>
                                <div class="col-md-6">
                                    <input id="name" name="name" type="text" placeholder="Nome"
                                           class="form-control input-md" required=""
                                           value="{{$users->name or old('name')}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label" for="cpf">CPF</label>
                                <div class="col-md-6">
                                    <input id="cpf" name="cpf" type="text" placeholder="CPF"
                                           class="form-control input-md" required=""
                                           value="{{$users->cpf or old('cpf')}}">

                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Senha" class="form-control"
                                           name="password" required value="{{$user->password or old('password')}}">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-3 control-label">Confirmar Senha</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" placeholder="Confirmar senha"
                                           class="form-control" name="senha" required value="{{$user->password or old('password')}}">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">E-mail</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
                                        <input id="email" name="email" type="text" placeholder="E-mail"
                                           class="form-control input-md"
                                           required="" value="{{$users->email or old('email')}}">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="telefone">Telefone</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                        <input id="telefone" name="telefone" type="text" placeholder="(99)99999-9999"
                                           class="form-control input-md" required=""
                                           value="{{$users->telefone or old('telefone')}}">
                                    </div>
                                </div>
                            </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id_tipo_atividade"> Tipo de User</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                            <select id="selectbasic" name="id_tipo" class="form-control">
                                            @foreach($tipo as $t)
                                                <option value="{{$t->id}}">{{$t->nome}}</option>
                                            @endforeach
                                            </select>
                                         </div>
                                    </div>
                            </div>
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="remember_token" value="{{ str_random(10)}}">


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
