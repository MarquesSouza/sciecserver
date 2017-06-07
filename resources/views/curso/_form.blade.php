<!-- Text input-->
@include('form._form1');
<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-4 control-label" for="instituicao">Instituição:</label>
    <div class="col-md-4">
        <select id="instituicao" name="id_instutions" class="form-control">
            @forelse ($instution as $i)

                <option value="{{$i->id}}">{{$i->nome}}</option>


            @empty
                <p>No users</p>
            @endforelse

        </select>
    </div>
</div>
<input type="hidden" name="status" value="1">
<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="salvar"></label>
    <div class="col-md-4">
        <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
    </div>
</div>