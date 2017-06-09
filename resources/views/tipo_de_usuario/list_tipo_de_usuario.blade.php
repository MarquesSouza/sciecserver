@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('usuaraio/config/cad') }}" class="btn btn-default">Novo Tipo Usuario</a>
            <br><br>

                <table class="table table-inverse">
                    <th>Nome</th>
                    <th>Descricão</th>


                    <tr>
                        @forelse ($typeUsers as $u)

                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->descricao }}</td>

                    </tr>
                    @empty
                        <p>No type_users</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
