<!-- Form Name -->
@extends('app')

@section('content')
        @if( isset($instutions))
            <form class="form-horizontal" method="post" action="{{ url('instituicao/update', $instutions->id) }}">
                {!! method_field('PUT') !!}
        @else
            <form class="form-horizontal" method="post" action="{{ url('instituicao/store') }}">
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
                               class="form-control input-md" required="" value="{{$instutions->nome or old('nome')}}">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Descrição</label>
                    <div class="col-md-5">
                        <input id="descricao" name="descricao" type="text" placeholder=""
                               class="form-control input-md" required="" value="{{$instutions->descricao or old('descricao')}}">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="" class="form-control input-md"
                               required="" value="{{$instutions->email or old('email')}}">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="telefone">Telefone</label>
                    <div class="col-md-4">
                        <input id="telefone" name="telefone" type="text" placeholder=""
                               class="form-control input-md" required="" value="{{$instutions->telefone or old('telefone')}}">

                    </div>
                </div>

                <input type="hidden" name="status" value="1">
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="site">Site</label>
                    <div class="col-md-4">
                        <input id="site" name="site" type="text" placeholder="" class="form-control input-md"
                               required="" value="{{$instutions->site or old('site')}}">

                    </div>
                </div>


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
