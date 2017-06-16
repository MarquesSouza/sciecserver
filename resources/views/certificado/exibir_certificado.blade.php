@extends('app')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Meus Certificados</h1>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-inverse">
                <th>Evento</th>
                <th>Atividades</th>
                <th>Quantidade de Horas</th>
                <th>Ação</th>

                <tr>
                    <td>{{ 'TESTE' }}</td>
                    <td>{{ 'TESTE'}}</td>
                    <td>{{ 'TESTE'}}</td>
                    <td>
                        <a href="#" class="btn-success btn btn-default btn-sm">IMPRIMIR</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
