@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Artigos</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                        <!-- INICIO MENSAGEM DE CONFIRMAÇÃO DE INSCRIÇÃO NO EVENTO -->
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Parabéns!</strong> Sua Inscrição No Evento Foi Confirmada Com Sucesso!
                        </div>
                        <!-- FINAL MENSAGEM DE CONFIRMAÇÃO DE INSCRIÇÃO NO EVENTO -->
                        <form action="{{url('evento/inscricao_evento/'.$events->id)}}" method="post">
                            {{csrf_field()}}
                            <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                <th>Nome</th>
                                <th>Descricão</th>
                                <th>Local</th>
                                <th>Data de Início</th>
                                <th>Data de Conclusão</th>
                                <th>Logo do Evento</th>
                                <th>Confirmar Inscrição</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $events->nome }}</td>
                                    <td>{{ $events->descricao }}</td>
                                    <td>{{ $events->local }}</td>
                                    <td>{{ $events->data_inicio }}</td>
                                    <td>{{ $events->data_conclusao }}</td>
                                    <td>{{ $events->logoEvento }}</td>
                                    <td>
                                        <input type="submit" class="btn btn-primary" value="Confirmar Inscrição">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
