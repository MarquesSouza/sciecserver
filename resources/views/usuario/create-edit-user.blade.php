@extends('app')
@section('content')
    @if( isset($users))
        <form class="form-horizontal" method="post" action="{{ url('usuario/update', $users->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('usuario/store') }}"
                {{csrf_field()}}>
                    @endif

                    {{csrf_field()}}
                    <fieldset>
                        <div class="container">
                            <hr>
                            <legend>{{$titulo}}</legend>
                            @if(isset($errors) && count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nome</label>
                                <div class="col-md-5">
                                    <input id="name" name="name" type="text" placeholder="Nome"
                                           class="form-control input-md" required=""
                                           value="{{$users->name or old('name')}}">

                                </div>
                            </div>
                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<input id="email" type="email" class="form-control" name="email"                                            required="" value="{{$users->email or old('email')}}">--}}
                            {{--@if ($errors->has('email'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-4">
                                    <input id="password" type="password" placeholder="senha" class="form-control"
                                           name="password" required value="{{$user->password or old('password')}}">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                                <div class="col-md-4">
                                    <input id="password-confirm" type="password" placeholder="confirmar senha"
                                           class="form-control" name="senha" required value="{{$user->password or old('password')}}">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">E-mail</label>
                                <div class="col-md-4">
                                    <input id="email" name="email" type="text" placeholder="e-mail"
                                           class="form-control input-md"
                                           required="" value="{{$users->email or old('email')}}">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="telefone">Telefone</label>
                                <div class="col-md-4">
                                    <input id="telefone" name="telefone" type="text" placeholder="telefone"
                                           class="form-control input-md" required=""
                                           value="{{$users->telefone or old('telefone')}}">

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cpf">CPF</label>
                                <div class="col-md-4">
                                    <input id="cpf" name="cpf" type="text" placeholder="CPF (colocar só números)"
                                           class="form-control input-md" required=""
                                           value="{{$users->cpf or old('cpf')}}">

                                </div>
                            </div>


                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for=""></label>
                                <div class="col-md-4">
                                    <button id="" name="" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
@endsection
