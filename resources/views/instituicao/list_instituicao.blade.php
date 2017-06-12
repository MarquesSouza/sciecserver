@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('instituicao/cad') }}" class="btn-primary btn btn-default">Nova Instituiçao</a>
            <br><br>

                <table class="table table-bordered table-hover">
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Site</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <tr>
                        @forelse ( $instutions as $u)

                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->descricao }}</td>
                            <td>{{ $u->site }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>
                            <td>
                                <a href="{{url('instituicao/edit',$u->id)}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                            </td>
                            <td>
                                <a href="{{url('instituicao/delete/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                            </td>


                    </tr>
                    @empty
                        <p>No type_users</p>
                    @endforelse

                </table>

        </div>
    </div>
@endsection
