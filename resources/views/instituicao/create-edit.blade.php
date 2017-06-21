<!-- Form Name -->
@extends('app2')

@section('content')
    @if( isset($instutions))
        <form class="form-horizontal" method="post" action="{{ url('instituicao/update', $instutions->id) }}">
            {!! method_field('PUT') !!}
            @else
                <form class="form-horizontal" method="post" action="{{ url('instituicao/store') }}">
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
                                <label class="col-md-4 control-label">Nome</label>
                                <div class="col-md-5">
                                    <input id="nome" name="nome" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$instutions->nome or old('nome')}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descrição</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-file-text"></span></span>
                                        <input id="descricao" name="descricao" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$instutions->descricao or old('descricao')}}">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
                                    <input id="email" name="email" type="text" placeholder=""
                                           class="form-control input-md"
                                           required="" value="{{$instutions->email or old('email')}}">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="telefone">Telefone</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                    <input id="telefone" name="telefone" type="text" placeholder=""
                                           class="form-control input-md" required=""
                                           value="{{$instutions->telefone or old('telefone')}}">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="status" value="1">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="site">Site</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                    <input id="site" name="site" type="text" placeholder=""
                                           class="form-control input-md"
                                           required="" value="{{$instutions->site or old('site')}}">
                                    </div>
                                </div>
                            </div>

<br><br><br>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-5 control-label" for=""></label>
                                <div class="col-md-5">
                                    <button id="" name="" class="btn btn-primary">Salvar</button>
                                    <a href="{{('instituicao/list_instituicao')}}">
                                      <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
                                     </a>
                                </div>
                                    </div> </div>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <!-- /.container -->

@endsection
