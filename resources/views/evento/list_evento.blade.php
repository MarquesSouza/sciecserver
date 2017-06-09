@extends('app')

@section('content')

    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <div class="c   ol-md-8 col-md-offset-2">
                <br><br>
                <a href="{{ url('evento/cad') }}" class="btn btn-default">Novo Evento</a>
                <br><br>
                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Local </th>
                    <th>Data de Início </th>
                    <th>Data de Conclusão</th>
                    <th>Logo do Evento</th>

                     <tr>
                        @forelse ($events as $ev)
                             <form action="{{url('evento/inscricao_evento/'.$ev->id)}}" method="post">
                                 {{csrf_field()}}

                                 <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>
                            <td>{{ $ev->local }}</td>
                            <td>{{ $ev->data_inicio }}</td>
                            <td>{{ $ev->data_conclusao }}</td>
                            <td>{{ $ev->logoEvento }}</td>
                                 <td><button type="submit" >Confirmar Inscrição</button></td>
                             </form>
                    </tr>
                    @empty
                        <p>No events</p>
                    @endforelse

                    </table>

            </div>
        </div>
    </div>
@endsection
