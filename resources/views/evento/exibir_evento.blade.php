@extends('app')
@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form action="{{url('evento/inscricao_evento/'.$events->id)}}" method="post">
                            {{csrf_field()}}
                            <br><br><br><br><br><br><br><br><br><br><br>
                            <table class="table table-bordered table-inverse">
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

                                        <a href="{{url('evento/'.$events->id.'/atividade/insc_atividade')}}" class="btn btn-primary">Confirmar Inscrição</a>

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
