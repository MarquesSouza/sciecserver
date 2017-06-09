@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="jumbotron green">
        <div class="container-fluid">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{url('evento/inscricao_evento/'.$events->id)}}" method="post">
                    {{csrf_field()}}
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Local </th>
                    <th>Data de Início </th>
                    <th>Data de Conclusão</th>
                    <th>Logo do Evento</th>
                    <th>Confirmar Inscrição</th>


                    <tr>
                            <td>{{ $events->nome }}</td>
                            <td>{{ $events->descricao }}</td>
                            <td>{{ $events->local }}</td>
                            <td>{{ $events->data_inicio }}</td>
                            <td>{{ $events->data_conclusao }}</td>
                            <td>{{ $events->logoEvento }}</td>
                        <td><button type="submit" class="btn-primary">Confirmar Inscrição</button></td>

                    </tr>

                </table>
                </form>
            </div>
        </div>
    </div>
@endsection
