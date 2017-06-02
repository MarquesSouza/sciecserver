@extends('app')

@section('content')

    <form class="form-horizontal">
        <fieldset>
            @include('form._form1');
            @include('usuario._form');
        </fieldset>
    </form>
@endsection
