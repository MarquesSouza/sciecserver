@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('participacao/cad') }}" class="btn btn-default">Novo Artigo</a>
            <br><br>

                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Telefone </th>
                    <th>Autores </th>
                    <th>Subtitulo </th>
                    <th>Situação </th>
                    <th>Editar</th>
                    <th>Excluir</th>

                    <tr>
                        @forelse ($artigo as $a)

                            <td>{{ $a->titulo }}</td>
                            <td>{{ $a->resumo }}</td>
                            <td>{{ $a->autores }}</td>
                            <td>{{ $a->local }}</td>
                            <td>{{ $a->subtitulo }}</td>
                            <td>{{ $a->situacao }}</td>
                            <td>
                                <a href="{{url('participacao/edite/{id}')}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                            </td>
                            <td>
                                <a href="{{url('participacao/delete/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                            </td>

                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse

                </table>

        </div>
    </div>
@endsection
