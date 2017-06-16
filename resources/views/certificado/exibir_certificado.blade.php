@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Meus Certificados</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
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
                            <a href="#" class="btn btn-success">IMPRIMIR</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
