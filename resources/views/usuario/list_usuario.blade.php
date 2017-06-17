@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Usuários</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <a href="{{ url('usuario/cad') }}" class="btn btn-primary">Novo Usuario</a>
                <br>
                <br>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                        </thead>
                        @forelse ($users as $u)
                            <tbody>
                            <tr>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->cpf }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->telefone }}</td>
                                <td>
                                    <a href="{{url('usuario/edit',$u->id)}}" class="btn btn-success">EDITAR</a>
                                </td>
                                <td>
                                    <a href="{{url('usuario/delete/{id}')}}" class="btn btn-danger">EXCLUIR</a>
                                </td>
                            </tr>
                            </tbody>
                        @empty
                            <p>No type_users</p>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
