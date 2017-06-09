@extends('app')

@section('content')
 <br><br><br><br>
    <div class="container-fluid">
    <h1>
        <center>Cadastrar Evento</center>
    </h1>
    <form class="form-horizontal" method="post" action="{{ url('evento/store') }}"  >
        {{csrf_field()}}>
        <fieldset>

            <!-- Form Name -->
            <legend></legend>

                @include('evento._form')

        </fieldset>
    </form>
    </div>




@endsection
