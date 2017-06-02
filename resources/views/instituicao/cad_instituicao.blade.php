@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <form class="form-horizontal" method="post" action="{{ url('instituicao/store') }}"  >

        <fieldset>
          @include('instituicao._form');

        </fieldset>
    </form>

    <!-- /.container -->



@endsection
