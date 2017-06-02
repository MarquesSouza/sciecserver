@extends('layouts.app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <div class="c   ol-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Site</th>
                    <th>Email</th>
                    <th>Telefone</th>

                    <tr>
                        @forelse ($instituicao as $u)

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
    </div>
@endsection
