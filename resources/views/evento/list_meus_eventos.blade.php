@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Meus Eventos</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                            <th>Nome</th>
                            <th>Descricão</th>
                            <th>Local</th>
                            <th>Data de Início</th>
                            <th>Data de Conclusão</th>
                            <th>Logo do Evento</th>
                            <th>Minhas Atividades</th>
                            </thead>

                            @forelse ($events as $ev)
                                <tbody>
                                <tr>
                                    <td>{{ $ev->nome }}</td>
                                    <td>{{ $ev->descricao }}</td>
                                    <td>{{ $ev->local }}</td>
                                    <td>{{ $ev->data_inicio }}</td>
                                    <td>{{ $ev->data_conclusao }}</td>
                                    <td>{{ $ev->logoEvento }}</td>
                                    <td>
                                        <a href="{{url('evento/'.$ev->id.'/atividade/atividades')}}"
                                           class="btn btn-success">Visualizar</a>
                                    </td>
                                </tr>
                                </tbody>
                            @empty
                                <p>No events</p>
                            @endforelse

                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
