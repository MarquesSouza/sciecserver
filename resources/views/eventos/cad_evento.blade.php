@extends('app')

@section('content')
 <br><br><br><br>
    <div class="container-fluid">
    <h1>
        <center>Cadastrar Evento</center>
    </h1>
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend></legend>

                @include('eventos._form')

        </fieldset>
    </form>
    </div>




@endsection
