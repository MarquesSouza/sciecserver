<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="telefone">Telefone:</label>
    <div class="col-md-4">
        <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">

    </div>
</div>



<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-4 control-label" for="instituicao">Instituição:</label>
    <div class="col-md-4">
        <select id="instituicao" name="instituicao" class="form-control">
            @forelse ($instution as $i)

                <option value="{{$i->id}}">{{$i->nome}}</option>


            @empty
                <p>No users</p>
            @endforelse

        </select>
    </div>
</div>

<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="salvar"></label>
    <div class="col-md-4">
        <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
    </div>
</div>