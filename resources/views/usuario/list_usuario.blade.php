@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('usuario/cad') }}" class="btn-primary btn btn-default">Novo Usuario</a>
            <br><br>

                <table class="table table-bordered table-inverse">
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>editar</th>
                    <th>excluir</th>
                    <tr>

                        @forelse ($users as $u)

                            <td>{{ $u->name }}</td>
                            <td>{{ $u->cpf }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>
                            <td>
                                <a href="{{url('usuario/edite')}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                            </td>
                            <td>
                                <a href="{{url('usuario/delete/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                            </td>

                    </tr>
                    @empty
                        <p>No type_users</p>
                    @endforelse

                </table>
        </div>
    </div>
@endsection
