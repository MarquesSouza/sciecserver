@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>

    <form class="form-horizontal" method="post" action="{{ url('usuario/config/store') }}"  >
        {{csrf_field()}}
        <fieldset>

            <!-- Form Name -->
            <legend >Cadastro Usuario</legend>
            <!-- Text input-->
            @include('usuario._form');
        </fieldset>
    </form>
@endsection
