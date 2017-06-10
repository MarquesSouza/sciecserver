@include('form._form1')
<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Curso</label>
    <div class="col-md-4">
        <select id="id_curso" name="id_curso" class="form-control">
            @forelse ( $cursos as $c)
                <option value="{{$c->id}}">{{$c->nome}}</option>
            @empty
                <p>No type_users</p>
            @endforelse
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