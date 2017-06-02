@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" action="{{route(curso.store)}}" method="post">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Cadastrar Curso</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nome">Nome do Curso:</label>
                            <div class="col-md-4">
                                <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="telefone">Telefone:</label>
                            <div class="col-md-4">
                                <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="descricao">Descrição:</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="descricao" name="descricao"></textarea>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="instituicao">Instituição:</label>
                            <div class="col-md-4">
                                <select id="instituicao" name="instituicao" class="form-control">
                                    @forelse ($instution as $i)

                                        <option value="{{$i->id}}">{{$i->nome}}</option>


                                    @empty
                                        <p>No users</p>
                                    @endforelse

                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="status">Status:</label>
                            <div class="col-md-4">
                                <select id="status" name="status" class="form-control">
                                    <option value="0">Option one</option>
                                    <option value="1">Option two</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="salvar"></label>
                            <div class="col-md-4">
                                <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
@endsection
