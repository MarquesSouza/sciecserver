@extends('app')
@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!-- INICIO MENSAGEM DE CONFIRMAÇÃO DE INSCRIÇÃO NO EVENTO -->
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Parabéns!</strong> Sua Inscrição No Evento Foi Confirmada Com Sucesso!
                        </div>
                        <!-- FINAL MENSAGEM DE CONFIRMAÇÃO DE INSCRIÇÃO NO EVENTO -->
                        <form action="{{url('evento/inscricao_evento/'.$events->id)}}" method="post">
                            {{csrf_field()}}
                            <br><br><br><br><br><br><br><br><br><br><br>
                            <table class="table table-bordered ">
                                <th>Nome</th>
                                <th>Descricão</th>
                                <th>Local</th>
                                <th>Data de Início</th>
                                <th>Data de Conclusão</th>
                                <th>Logo do Evento</th>
                                <th>Confirmar Inscrição</th>
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
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
