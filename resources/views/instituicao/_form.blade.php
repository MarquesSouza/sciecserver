<!-- Form Name -->
<div class="container"><hr>
<legend>Cadastro Instituiçao</legend>
@if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{$error}}
            @endforeach
    </div>

    @endif

@include('form._form1');
@include('form._form3');

<input type="hidden" name="status" value="1">
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="site">Site</label>
    <div class="col-md-4">
        <input id="site" name="site" type="text" placeholder="" class="form-control input-md" required="">

    </div>
</div>



<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
        <button id="" name="" class="btn btn-primary">casdastrar</button>
    </div>
</div>
</div>