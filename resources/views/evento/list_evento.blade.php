@extends('app')
@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ url('evento/cad') }}" class="btn btn-primary ">Novo Evento</a>
                        <table class="table table-bordered ">
                            <th>Nome</th>
                            <th>Descricão</th>
                            <th>Local</th>
                            <th>Data de Início</th>
                            <th>Data de Conclusão</th>
                            <th>Logo do Evento</th>
                            <th>Edita</th>
                            <th>Excluir</th>
                            <tr>
                                @forelse ($events as $ev)

                                    <td>{{ $ev->nome }}</td>
                                    <td>{{ $ev->descricao }}</td>
                                    <td>{{ $ev->local }}</td>
                                    <td>{{ $ev->data_inicio }}</td>
                                    <td>{{ $ev->data_conclusao }}</td>
                                    <td>{{ $ev->logoEvento }}</td>
                                    <td>
                                        <a href="{{url('usuario/config/edit/{id}')}}" class="btn btn-success">EDITAR</a>
                                    </td>
                                    <td>
                                        <a href="{{url('usuario/config/edit/{id}')}}" class="btn btn-danger">EXCLUIR</a>
                                    </td>

                            </tr>
                            @empty
                                <p>No events</p>
                            @endforelse

                        </table>

                    </div>
                </div>
            </div>
@endsection
