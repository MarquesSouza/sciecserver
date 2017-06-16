@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Eventos em Andamento</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('evento/cad') }}" class="btn btn-primary">Novo Evento</a>
                        <br>
                        <br>
                        <table class="table datatable">
                            <thead>
                            <th>Nome</th>
                            <th>Descricão</th>
                            <th>Local</th>
                            <th>Data de Início</th>
                            <th>Data de Conclusão</th>
                            <th>Logo do Evento</th>
                            <th>Editar</th>
                            <th>Excluir</th>
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
                                        <a href="{{url('usuario/config/edit/{id}')}}"
                                           class="btn btn-success">EDITAR</a>
                                    </td>
                                    <td>
                                        <a href="{{url('usuario/config/edit/{id}')}}"
                                           class="btn btn-danger">EXCLUIR</a>
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
