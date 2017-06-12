@include('form._form1');
@include('form._form2');
<div class="form-group">
        <label class="col-md-3 col-xs-12 control-label" for="atividade">Carga Horária</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
            <input id="hora" name="hora" type="time" placeholder="Ex: '01:00'"
                   class="form-control" required="">
            </div>

        </div>
    </div>
    <!-- Dtq de Inscritos-->
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label" for="qtd_inscritos">Quantidade de Inscritos</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-user"></span></span>
            <input id="hora" name="qtd_inscritos" type="text" placeholder="Quantidade Máxima de Inscritos"
                   class="form-control" required="">
            </div>
        </div>
    </div>
    <!-- Local da Atividade-->
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label" for="cod_inscritos">Código de Inscrição</label>
        <div class="col-md-6 col-xs-12">
            <input id="local" name="local" type="text" placeholder="Do Local da Atividade"
                   class="form-control input-md" required="">

        </div>
    </div>

<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-3 col-xs-12 control-label" for="selectbasic"> Tipo de Atividade</label>
    <div class="col-md-6 col-xs-12">
        <select id="selectbasic" name="id_tipo_atividade" class="form-control">
            <option value="1">Palestra</option>
            <option value="1">Minicurso</option>
        </select>
    </div>
</div>
<input type="hidden" name="status" value="1">
    <div class="form-group">
        <label class="col-md-4 control-label" for="cadastrar"></label>
        <div class="col-md-4">
            <button id="cadastrar" name="cadastrar" class="btn btn-success">Cadastrar</button>
        </div>
       <a href="#"> <!-- Inserir link para página anterior -->
        <div class="col-md-4">
            <button class="btn btn-danger">Voltar</button>
        </div>
       </a>
    </div>
