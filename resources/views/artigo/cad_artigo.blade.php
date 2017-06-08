@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <form class="form-horizontal">
        <fieldset>
            <legend>Cadastro de Artigo</legend>
            @include('artigo._form');
        </fieldset>
    </form>

    <!-- /.container -->



@endsection
