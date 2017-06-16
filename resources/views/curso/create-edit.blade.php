@extends('app')

@section('content')
        @if( isset($courses))
            <form class="form-horizontal" method="post" action="{{ url('curso/update', $courses->id) }}">
                {!! method_field('PUT') !!}
                @else
                    <form class="form-horizontal" method="post" action="{{ url('curso/store') }}">
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
                    <input id="nome" name="nome" type="text" placeholder="Nome"
                           class="form-control input-md" required="" value="{{$courses->nome or old('nome')}}">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Descrição</label>
                <div class="col-md-5">
                    <input id="descricao" name="descricao" type="text" placeholder="Descrição da Atividade"
                           class="form-control input-md" required="" value="{{$courses->descricao or old('descricao')}}">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="instituicao">Instituição:</label>
                <div class="col-md-4">
                    <select id="instituicao" name="id_instutions" class="form-control">
                        @forelse ($instution as $i)

                            <option value="{{$i->id}}">{{$i->nome}}</option>


                        @empty
                            <p>No users</p>
                        @endforelse

                    </select>
                </div>
            </div>
            <input type="hidden" name="status" value="1">
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="salvar"></label>
                <div class="col-md-4">
                    <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
                </div>
            </div>
          </div>
        </fieldset>
    </form>

    <!-- /.container -->
@endsection