@extends('app')
@section('content')

    <form class="form-horizontal" method="post" action="{{ url('usuario/update', $users->id) }}">
        {!! method_field('PUT') !!}

        {{csrf_field()}}
        <fieldset>
            <div class="container">
                <hr>
                <h1 class="text-center">Alteração de senha</h1>
                @if(isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif


                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-3 control-label">Senha</label>

                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="Senha" class="form-control"
                               name="password"  value="{{$user->password or old('password')}}">

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
                               class="form-control" name="senha"  value="{{$user->password or old('password')}}">
                    </div>
                </div>



                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-5 control-label" for=""></label>
                    <div class="col-md-5">
                        <button id="" name="" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
