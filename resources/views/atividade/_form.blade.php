@include('form._form1');
@include('form._form2');
<div class="form-group">
        <label class="col-md-4 control-label" for="atividade">Hora</label>
        <div class="col-md-5">
            <input id="hora" name="hora" type="time" placeholder="Horário da Atividade"
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
        <label class="col-md-4 control-label" for="cod_inscritos">Código de Inscrição</label>
        <div class="col-md-5">
            <input id="local" name="local" type="text" placeholder="Local da Atividade"
                   class="form-control input-md" required="">

        </div>
    </div>

<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic"> Tipo de Atividade</label>
    <div class="col-md-4">
        <select id="selectbasic" name="id_tipo_atividade" class="form-control">
            <option value="1">Palestra</option>
        </select>
    </div>
</div>
<input type="hidden" name="status" value="1">
<!--<input type="hidden" name="id_evento" value="1">
    Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="cadastrar"></label>
        <div class="col-md-4">
            <button id="cadastrar" name="cadastrar" class="btn btn-success">Cadastrar</button>
        </div>
    </div>
