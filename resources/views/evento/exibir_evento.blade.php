@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inscrição no Evento</h3>
                    </div>

                        <form action="{{url('evento/inscricao_evento/'.$events->id)}}" method="post">
                            {{csrf_field()}}
                            <div class="panel-body">
                                <ul class="list-group-item"><h4>Evento: {{$events->nome}}</h4>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item">Sobre: {{ $events->descricao}}</li>
                                    <li class="list-group-item">Local:{{$events->local}}</li>
                                    <li class="list-group-item">Data / Hora Inicio:{{ $events->data_inicio }}</li>
                                    <li class="list-group-item">Data/ Hora Conclusão:{{ $events->data_conclusao }}</li>
                                    <li class="list-group-item list-group-item-success"><p>Deseja se inscrever neste
                                            Evento?</p>
                                        <input type="submit" class="btn btn-primary" value="Confirmar Inscrição">
                                    </li>

                                </ul>




                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
