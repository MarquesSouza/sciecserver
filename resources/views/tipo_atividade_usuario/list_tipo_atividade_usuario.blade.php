@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tipo_Atividade_Usuario</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <th>Nome</th>
                        <th>Descricão</th>
                        </thead>
                        @forelse ($events as $ev)
                            <tbody>
                            <tr>
                                <td>{{ $ev->nome }}</td>
                                <td>{{ $ev->descricao }}</td>
                            </tr>
                            </tbody>
                        @empty
                            <p>No type_activity_users</p>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
