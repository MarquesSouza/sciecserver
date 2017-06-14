@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ url('usuario/config/cad') }}" class="btn-primary btn btn-default">Novo Tipo Usuario</a>
                        <table class="table table-bordered table-inverse">
                            <th>Nome</th>
                            <th>Descricão</th>
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                                @forelse ($typeUsers as $u)
                                <tr>
                                    <td>{{ $u->nome }}</td>
                                    <td>{{ $u->descricao }}</td>
                                    <th>{{$u->status }}</th>
                                    <td><a href="{{url('usuario/config/edit/{id}')}}" class="btn btn-success">EDITAR</a></td>
                                    <td><a href="{{url('usuario/config/edit/{id}')}}" class="btn btn-danger">EXCLUIR</a></td>
                                </tr>
                            @empty
                                <p>No type_users</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
