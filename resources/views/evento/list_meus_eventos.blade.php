@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Local </th>
                    <th>Data de Início </th>
                    <th>Data de Conclusão</th>
                    <th>Logo do Evento</th>
                    <th>Minhas Atividades</th>

                     <tr>
                        @forelse ($events as $ev)
                             <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>
                            <td>{{ $ev->local }}</td>
                            <td>{{ $ev->data_inicio }}</td>
                            <td>{{ $ev->data_conclusao }}</td>
                            <td>{{ $ev->logoEvento }}</td>
                                 <td>
                                     <a href="{{url('evento/'.$ev->id.'/atividade/atividades')}}" class="btn-success btn btn-default btn-sm">Visualizar</a>
                                 </td>
                    </tr>
                    @empty
                        <p>No events</p>
                    @endforelse

                    </table>

            </div>
        </div>
    </div>
@endsection
