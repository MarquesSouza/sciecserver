@extends('home')

@section('content')

    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastro de Artigo</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="titulo">Titulo</label>
                <div class="col-md-4">
                    <input id="titulo" name="titulo" type="text" placeholder="nome" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="subtitulo">SubTitulo</label>
                <div class="col-md-4">
                    <input id="subtitulo" name="subtitulo" type="text" placeholder="nome" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="resulmo">Resulmo</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="resulmo" name="resulmo"></textarea>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="autores">Autores</label>
                <div class="col-md-4">
                    <input id="autores" name="autores" type="text" placeholder="nome" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="local">Local</label>
                <div class="col-md-4">
                    <input id="local" name="local" type="text" placeholder="end" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="situacao">Situaçao</label>
                <div class="col-md-4">
                    <input id="situacao" name="situacao" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cadastrar"></label>
                <div class="col-md-4">
                    <button id="cadastrar" name="cadastrar" class="btn btn-primary">cadastrar</button>
                </div>
            </div>

        </fieldset>
    </form>

    <!-- /.container -->



@endsection
