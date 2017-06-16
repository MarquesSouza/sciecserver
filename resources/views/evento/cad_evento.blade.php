@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="{{ url('evento/store') }}">
                    {{csrf_field()}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Cadastro de Artigos</strong></h3>
                        </div>
                        <div class="panel-body">
                            @include('evento._form')
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
