@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Meus Certificados</h3>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <th>Evento</th>
                        <th>Atividades</th>
                        <th>Quantidade de Horas</th>
                        <th>Ação</th>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{ 'TESTE' }}</td>
                            <td>{{ 'TESTE'}}</td>
                            <td>{{ 'TESTE'}}</td>
                            <td>
                                <a href="#" class="btn btn-success">IMPRIMIR</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
