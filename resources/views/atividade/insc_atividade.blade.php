@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3>Titulo do Evento</h3></div>
            <!-- List group -->
            <form action="{{url('evento/'.$id_evento.'/atividade/insc_atividade/'.$id_user)}}"
                  method="post">
                {{csrf_field()}}
                @forelse ($activities as $a)
                    @if($a->status==1)

                        <ul class="list-group-item"><h4>{{$a->tipoAtividade->nome}}</h4>
                            <li class="list-group-item">Atividade: {{$a->nome}}</li>
                            <li class="list-group-item">Sobre: {{$a->descricao}}</li>
                            <li class="list-group-item">Local:{{$a->local}}</li>
                            <li class="list-group-item">
                                Quantidade:{{ $a->qtd_inscritos- $atividadeUser->quantidade($a->id) }}</li>
                            <li class="list-group-item">Data / Hora Inicio:{{$a->data_inicio}}</li>
                            @if(($atividadeUser->validaUserAtividade($a->id, $id_user))&&($a->qtd_inscritos>0))

                                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta
                                        Atividade?</p>
                                    <input type="checkbox" name="id_atividade[]" id="checkboxes-0" value="{{$a->id}}">
                                    @else
                                </li>
                                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta
                                        Atividade?</p>
                                    Ja Inscrito!!
                                </li>
                            @endif
                        </ul>

            @endif
            @endforeach

            <p class="text-center">
                <button class="btn btn-success" type="submit">Confirmar Inscrição</button>

                <a href="{{ url('/insc_evento') }}" class="btn btn-danger" role="button">Voltar</a></p>
            <!-- endforeach // Passar Parametros Acima -->
            </form>
        </div>
    </div>
@endsection