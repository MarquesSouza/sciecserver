@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <div class="c   ol-md-8 col-md-offset-2">
                <form action="{{url('evento/inscricao_evento')}}" method="post">
                    {{csrf_field()}}
                    <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Local </th>
                    <th>Data de Início </th>
                    <th>Data de Conclusão</th>
                    <th>Logo do Evento</th>


                    <tr>
                            <td>{{ $events->id }}</td>
                            <td>{{ $events->nome }}</td>
                            <td>{{ $events->descricao }}</td>
                            <td>{{ $events->local }}</td>
                            <td>{{ $events->data_inicio }}</td>
                            <td>{{ $events->data_conclusao }}</td>
                            <td>{{ $events->logoEvento }}</td>
                        <td><button type="submit" >Confirmar Inscrição</button></td>

                    </tr>

                </table>
                </form>
            </div>
        </div>
    </div>
@endsection
