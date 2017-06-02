@extends('home')

@section('content')

    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastro Instituiçao</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="instituiçao">Instituiçao</label>
                <div class="col-md-4">
                    <input id="instituiçao" name="instituiçao" type="text" placeholder="nome da Instituiçao" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="site">Site</label>
                <div class="col-md-4">
                    <input id="site" name="site" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telefone">Telefone</label>
                <div class="col-md-4">
                    <input id="telefone" name="telefone" type="text" placeholder="telefone" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="e-mail">E-mail</label>
                <div class="col-md-4">
                    <input id="e-mail" name="e-mail" type="text" placeholder="email" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="descricao">Descriçao</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" name="" class="btn btn-primary">casdastrar</button>
                </div>
            </div>

        </fieldset>
    </form>

    <!-- /.container -->



@endsection
