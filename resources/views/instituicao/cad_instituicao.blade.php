@extends('app')

@section('content')

    <form class="form-horizontal">
        <fieldset>

          @include('form._form1');
          @include('form._form3');
          @include('instituicao._form');

        </fieldset>
    </form>

    <!-- /.container -->



@endsection
