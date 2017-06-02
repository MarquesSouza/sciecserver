@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Telefone </th>
                    <th>Autores </th>
                    <th>Subtitulo </th>
                    <th>Situação </th>

                    <tr>
                        @forelse ($artigo as $a)

                            <td>{{ $a->titulo }}</td>
                            <td>{{ $a->resumo }}</td>
                            <td>{{ $a->autores }}</td>
                            <td>{{ $a->local }}</td>
                            <td>{{ $a->subtitulo }}</td>
                            <td>{{ $a->situacao }}</td>
                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse

                </table>
            </div>
        </div>
    </div>
@endsection
