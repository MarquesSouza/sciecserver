@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <form class="form-horizontal" method="post" action="{{ url('instituicao/store') }}"  >
        {{csrf_field()}}
        <fieldset>
          @include('instituicao._form');

        </fieldset>
    </form>

    <!-- /.container -->



@endsection
