@include('form._form1')
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
<input type="hidden" name="status" value="1">


@include('form._form2')

<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-success">Cadastrar</button>
        <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
    </div>
</div>