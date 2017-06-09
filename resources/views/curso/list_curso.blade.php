@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('curso/cad') }}" class="btn-primary btn btn-default">Novo Curso</a>
            <br><br>

                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Editar</th>
                    <th>Excluir</th>

                    <tr>
                        @forelse ($courses as $c)

                            <td>{{ $c->nome }}</td>
                            <td>{{ $c->descricao }}</td>
                            <td>
                                <a href="{{url('curso/edite/{id}')}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                            </td>
                            <td>
                                <a href="{{url('curso/delete/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                            </td>

                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
