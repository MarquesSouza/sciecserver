@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3>Titulo do Evento</h3></div>
            <!-- List group -->


            @forelse ($activities as $a)
                @if($a->status==1)
                    <form action="{{url('evento/'.$a->id_evento.'/atividade/insc_atividade/'.$a->id)}}"
                          method="post">
                        {{csrf_field()}}

                        <ul class="list-group-item"><h4>{{$a->tipoAtividade->nome}}</h4>
                            <li class="list-group-item">Atividade: {{$a->nome}}</li>
                            <li class="list-group-item">Sobre: {{$a->descricao}}</li>
                            <li class="list-group-item">Local:{{$a->local}}</li>
                            <li class="list-group-item">Quantidade:{{ $a->qtd_inscritos- $atividadeUser->quantidade($a->id) }}</li>
                            <li class="list-group-item">Data / Hora Inicio:{{$a->data_inicio}}</li>
                            @if(($atividadeUser->validaUserAtividade($a->id, $id_user))&&($a->qtd_inscritos>0))

                            <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta Atividade?</p>
                                <button type="submit">Confirmar Inscrição</button>
                                @else
                            </li>
                                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta Atividade?</p>
                                    Ja Inscrito!!
                                 </li>
                            @endif
                        </ul>




                    </form>
                @endif

            @endforeach



            <p class="text-center"><a href="#" class="btn btn-success" role="button">Enviar Inscrição</a>
                <a href="{{ url('/insc_evento') }}" class="btn btn-danger" role="button">Voltar</a></p>
            <!-- endforeach // Passar Parametros Acima -->
        </div>
    </div>
@endsection