@extends('layouts.app')

@section('content')

  <form class="form-horizontal">
      <fieldset>

          <!-- Form Name -->
          <legend >Cadastro Usuario</legend>
          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="nome">Nome</label>
              <div class="col-md-4">
                  <input id="nome" name="nome" type="text" placeholder="nome completo" class="form-control input-md" required="">

              </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="cpf">Cpf</label>
              <div class="col-md-4">
                  <input id="cpf" name="cpf" type="text" placeholder="cpf" class="form-control input-md" required="">

              </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>
              <div class="col-md-4">
                  <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">

              </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="telefone">Telefone</label>
              <div class="col-md-4">
                  <input id="telefone" name="telefone" type="text" placeholder="telefone" class="form-control input-md" required="">

              </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="senha">Senha</label>
              <div class="col-md-4">
                  <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">

              </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="confirma senha">Confirmar senha</label>
              <div class="col-md-4">
                  <input id="confirma senha" name="confirma senha" type="password" placeholder="" class="form-control input-md" required="">

              </div>
          </div>

          <!-- Button -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"> </label>
              <div class="col-md-4">
                  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar </button>
              </div>
          </div>

      </fieldset>
  </form>





@endsection
