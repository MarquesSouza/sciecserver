@extends('app')

@section('content')

    <h1>
        <center>Cadastrar Tipo de Atividade</center>
    </h1>
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend></legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="Nome do Tipo de Atividade" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Descrição</label>
                <div class="col-md-4">
                    <textarea class="form-control" placeholder="Descrição do Tipo de Atividade" id="textarea" name="textarea"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-success">Cadastrar</button>
                </div>
            </div>

        </fieldset>
    </form>




@endsection
