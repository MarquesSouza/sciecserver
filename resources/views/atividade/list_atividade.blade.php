@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('atividade/cad') }}" class="btn btn-default">Novo Atividade</a>
            <br><br>

            <table class="table table-bordered table-inverse">
                    <tr>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>status</th>
                    <th>Hora</th>
                    <th>Local</th>
                    <th>QTD Inscritos</th>
                    <th>Cod Inscritos</th>
                    <th>Data de Início</th>
                    <th>Data de Conclusão</th>
                    </tr>
                    <tr>
                        @forelse ($activities as $a)

                            <td>{{ $a->nome }}</td>
                            <td>{{ $a->descricao }}</td>
                            <td>{{ $a->status }}</td>
                            <td>{{ $a->hora }}</td>
                            <td>{{ $a->local }}</td>
                            <td>{{ $a->qtd_inscritos }}</td>
                            <td>{{ $a->cod_inscritos }}</td>
                            <td>{{ $a->data_inicio }}</td>
                            <td>{{ $a->data_conclusao }}</td>
                                   </tr>
                    @empty
                        <p>No activities</p>
                    @endforelse

                </table>

        </div>
    </div>
@endsection
