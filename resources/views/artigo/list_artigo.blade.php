@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
            <a href="{{ url('artigo/cad') }}" class="btn btn-primary">Novo Artigo</a>
                <table class="table table-bordered">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Telefone </th>
                    <th>Autores </th>
                    <th>Subtitulo </th>
                    <th>Situação </th>
                    <th>Editar</th>
                    <th>Excluir</th>

                    <tr>
                        @forelse ($articles as $a)

                            <td>{{ $a->titulo }}</td>
                            <td>{{ $a->resumo }}</td>
                            <td>{{ $a->autores }}</td>
                            <td>{{ $a->local }}</td>
                            <td>{{ $a->subtitulo }}</td>
                            <td>{{ $a->situacao }}</td>
                            <td>
                                <a href="{{url('artigo/edit',$a->id)}}" class="btn btn-success">EDITAR</a>
                            </td>
                            <td>
                                <a href="{{url('artigo/delete',$a->id)}}" class="btn btn-danger">EXCLUIR</a>
                            </td>

                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection