@extends('app2')
@section('content')

        <form class="form-horizontal" method="post" action="{{ url('usuario/update', $users->id) }}">
            {!! method_field('PUT') !!}

                    {{csrf_field()}}
                    <fieldset>
                        <div class="container">
                            <hr>
                            <h1 class="text-center">Alteração perfil</h1>
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



                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="id_tipo" value="1">

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
