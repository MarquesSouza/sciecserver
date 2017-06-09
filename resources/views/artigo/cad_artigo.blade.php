@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <form class="form-horizontal" method="post" action="{{ url('artigo/store') }}"  >
        {{csrf_field()}}
        <fieldset>
            <legend>Cadastro de Artigo</legend>
            @include('artigo._form');
        </fieldset>
    </form>

    <!-- /.container -->



@endsection
