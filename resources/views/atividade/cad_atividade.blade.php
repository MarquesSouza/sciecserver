@extends('app');

@section('content');
<div>
    <br><br><br><br>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" action="">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>
                            <center>Cadastrar Atividade</center>
                        </legend>
                        @include('form._form1');
                        @include('form._form2');
                        @include('atividade._form');
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection