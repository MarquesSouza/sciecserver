@extends('app')
@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <table class="table table-bordered ">
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
    </div>
    </div>
@endsection
