@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('instituicao/cad') }}" class="btn btn-default">Nova Intituiçao</a>
            <br><br>

                <table class="table table-inverse">
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Site</th>
                    <th>Email</th>
                    <th>Telefone</th>

                    <tr>
                        @forelse ( $instutions as $u)

                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->descricao }}</td>
                            <td>{{ $u->site }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>


                    </tr>
                    @empty
                        <p>No type_users</p>
                    @endforelse

                </table>

        </div>
    </div>
@endsection
