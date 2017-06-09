@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
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
                    <th>Editar</th>
                     <th>Excluir</th>

                    </tr>
                    <tr>
                        @forelse ($activities as $a)
                            <form action="{{url('evento/'.$a->id_evento.'/atividade/insc_atividade/'.$a->id)}}" method="post">
                                {{csrf_field()}} <br><br>

                                <td>{{ $a->nome }}</td>
                            <td>{{ $a->descricao }}</td>
                            <td>{{ $a->status }}</td>
                            <td>{{ $a->hora }}</td>
                            <td>{{ $a->local }}</td>
                            <td>{{ $a->qtd_inscritos }}</td>
                            <td>{{ $a->cod_inscritos }}</td>
                            <td>{{ $a->data_inicio }}</td>
                            <td>{{ $a->data_conclusao }}</td>
                                <td>
                                    <a href="{{url('usuario/config/edit/{id}')}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                                </td>
                                <td>
                                    <a href="{{url('usuario/config/edit/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                                </td>

                            </form>
                    </tr>
                    @empty

                        <p>No activities</p>
                    @endforelse

                </table>

        </div>
    </div>
@endsection
