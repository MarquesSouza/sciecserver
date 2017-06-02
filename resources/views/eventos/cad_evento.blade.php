@extends('app')

@section('content')
 <br><br><br><br>
    <div class="container-fluid">
    <h1>
        <center>Cadastrar Evento</center>
    </h1>
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend></legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="Nome do Evento" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Descrição</label>
                <div class="col-md-4">
                    <textarea class="form-control" placeholder="Descrição do Evento" id="textarea" name="textarea"></textarea>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Instituição</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1">IFTO - Campus Paraíso do Tocantins</option>
                        <option value="2">IFTO - Campus Palmas</option>
                        <option value="3">UFT - Campus Palmas</option>
                    </select>
                </div>
            </div>


            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Curso</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1">Bacharelado em Sistemas de Informação</option>
                        <option value="2">Bacharelado em Administração</option>
                        <option value="3">Licenciatura em Quimica</option>
                    </select>
                </div>
            </div>



            <!-- Select Multiple -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectmultiple">Atividades</label>
                <div class="col-md-4">
                    <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
                        <option value="1">Palestra</option>
                        <option value="2">Minicurso</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Data De Início</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="datetime-local" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Data De Conclusão</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="datetime-local" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Local</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="text" placeholder="Local do Evento" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-success">Cadastrar</button>
                    <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
                </div>
            </div>

        </fieldset>
    </form>
    </div>




@endsection
