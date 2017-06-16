@include('form._form1') <!-- Reaproveitamento de cógigo para formulários -->
<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-3 col-xs-12 control-label" for="selectbasic">Curso</label>
    <div class="col-md-6 col-xs-12">
        <select id="id_curso" name="id_curso" class="form-control select">
        @forelse ( $cursos as $c) <!-- Aqui está pegando o Curso do Evento -->
            <option value="{{$c->id}}">{{$c->nome}}</option>
            @empty
                <p>No type_users</p>
            @endforelse
        </select>
        <span class="help-block">Selecione o Curso no Qual Será Vinculado ao Evento</span>
    </div>
</div>
<input type="hidden" name="status" value="1">

@include('form._form2') <!-- Reaproveitamento de cógigo para formulários -->

<!-- Button  -->
<div class="form-group">
    <label class="col-md-3 col-xs-12 control-label" for="singlebutton"></label>
    <div class="btn-block">
        <button id="singlebutton" name="singlebutton" class="btn btn-success">Cadastrar</button>
        <a href="{{('/')}}">
            <button id="singlebutton" name="singlebutton" class="btn btn-danger">Voltar</button>
        </a>
    </div>
</div>