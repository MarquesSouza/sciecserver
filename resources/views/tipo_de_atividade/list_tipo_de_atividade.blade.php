@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('atividade/config/cad') }}" class="btn btn-default">Novo Tipo Atividade</a>
            <br><br>

                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>


                     <tr>
                        @forelse ($typeActivities as $ev)

                            <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>


                    </tr>
                    @empty
                        <p>No type_activities</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
