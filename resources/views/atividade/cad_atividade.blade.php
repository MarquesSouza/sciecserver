@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>
                            <center>Cadastrar Atividade</center>
                        </legend>

                        <!-- Nome da Atividade-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="atividade">Nome</label>
                            <div class="col-md-5">
                                <input id="atividade" name="nome" type="text" placeholder="Nome da Atividade"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Descrição da Atividade-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="atividade">Descrição</label>
                            <div class="col-md-5">
                                <input id="descricao" name="descricao" type="text" placeholder="Descrição da Atividade"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Hora da Atividade-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="atividade">Hora</label>
                            <div class="col-md-5">
                                <input id="hora" name="hora" type="time" placeholder="Horário da Atividade"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Local da Atividade-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="local">Local</label>
                            <div class="col-md-5">
                                <input id="local" name="local" type="text" placeholder="Local da Atividade"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Dtq de Inscritos-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="qtd_inscritos">Quantidade de Inscritos</label>
                            <div class="col-md-5">
                                <input id="hora" name="qtd_inscritos" type="text" placeholder="Quantidade de Inscritos"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Local da Atividade-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="cod_inscircao">Código de Inscrição</label>
                            <div class="col-md-5">
                                <input id="local" name="local" type="text" placeholder="Local da Atividade"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Data de Início-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="data_inicio">Data de Início</label>
                            <div class="col-md-5">
                                <input id="data_inicio" name="data_inicio" type="text" placeholder="Data de Início"
                                       class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Data de Conclusão-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="data_conclusao">Data de Conclusão</label>
                            <div class="col-md-5">
                                <input id="data_conclusao" name="data_conclusao" type="text"
                                       placeholder="Data de Conclusão" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="cadastrar"></label>
                            <div class="col-md-4">
                                <button id="cadastrar" name="cadastrar" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection