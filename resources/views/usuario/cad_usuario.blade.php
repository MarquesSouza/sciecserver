@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <form class="form-horizontal">
        <fieldset>
            @include('form._form1');
            @include('usuario._form');
        </fieldset>
    </form>
@endsection
