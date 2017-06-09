@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <form class="form-horizontal" method="post" action="{{ url('curso/store') }}"  >
        {{csrf_field()}}
        <fieldset>
            <legend>Cadastro de Curso</legend>
            @include('curso._form');
        </fieldset>
    </form>

    <!-- /.container -->



@endsection
