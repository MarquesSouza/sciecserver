@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <form class="form-horizontal">
        <fieldset>
            <legend>Cadastro de Curso</legend>
            @include('curso._form');
        </fieldset>
    </form>

    <!-- /.container -->



@endsection
