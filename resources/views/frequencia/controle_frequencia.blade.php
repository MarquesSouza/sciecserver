@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Controle de Frequência</h3>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <th>Usuário</th>
                        <th>CPF</th>
                        <th>Evento</th>
                        <th>Atividade</th>
                        <th>Hora de Entrada</th>
                        <th>Hora de Saída</th>
                        <th>Ação</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ 'Rômulo Oliveira Sousa' }}</td>
                            <td>{{ '000.000.000-00'}}</td>
                            <td>{{ 'II Semana Agroinformática de Paraíso do Tocantins'}}</td>
                            <td>{{ 'Mineração de Dados'}}</td>
                            <td>{{ '19:00'}}</td>
                            <td>{{ '22:00'}}</td>
                            <td>
                                <a href="#" class="btn btn-success">Aprovar</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
