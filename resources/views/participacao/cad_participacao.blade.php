@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <h1>
        <center>Cadastrar Participação</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('participacao/store') }}"  >
        {{csrf_field()}}
        <fieldset>

            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @include('participacao._form');
        </fieldset>
    </form>

@endsection
