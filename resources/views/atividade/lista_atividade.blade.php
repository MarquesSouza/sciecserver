@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>status </th>
                    <th>Hora </th>
                    <th>Local </th>
                    <th>QTD Inscritos </th>
                    <th>Cod Inscritos </th>
                    <th>Data de Início </th>
                    <th>Data de Conclusão </th>
                    <th>ID Evento </th>
                    <th>ID Tipo Atividade </th>

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
                            <td>{{ $a->id_evento }}</td>
                            <td>{{ $a->id_tipo_atividade }}</td>>
                    </tr>
                    @empty
                        <p>No activities</p>
                    @endforelse

                    </table>
            </div>
        </div>
    </div>
@endsection
