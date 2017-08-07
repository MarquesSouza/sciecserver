@extends('app2')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Frequencia da Atividade: {{$nomeAtividade}}</h3>

                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        @if($disponivel == 0)
                            Atividade Com vagas preenchidas {{$qtdt}}
                        @else

                            <a href="{{url('evento/'.$id_evento.'/atividade/'.$id.'/inscricao')}}"
                               class="btn-success btn btn-default btn-sm">Adicionar Inscrição</a>
                            <span>Quantidade de Vagas disponiveis: {{$qtdt}}</span>

                        @endif



                        <br>
                        <br>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Tipo de Atividade do Usuario</th>
                                <th>CPF</th>
                           <!--     <th>Data de Entrada</th>
                                <th>Data de Saida</th>
                                <th>Entrada</th>
                                <th>Saida</th> -->
                                <th>Presença</th>
                            </tr>
                            </thead>

                            <tbody>

                            @forelse ($lista as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->tipo_atividade_user }}</td>
                                    <td>{{ $a->cpf }}</td>
                            <!--        <td> $a->data_entrada }}</td>
                                    <td> $a->data_saida }}</td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('evento/'.$id_evento.'/atividade/'.$a->id_activity.'/entrada/'. $a->id_activiUser) }}">
                                        {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                            @if($a->presenca==1)

                                                <button type="submit" id="" name="" class="btn btn-danger ">
                                                    Entrada
                                                </button>
                                                @else
                                                Não estar presente
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('evento/'.$id_evento.'/atividade/'.$a->id_activity.'/saida/'. $a->id_activiUser) }}">
                                        {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                            @if($a->presenca==1)

                                                <button type="submit" id="" name="" class="btn btn-danger ">
                                                    Saida
                                                </button>
                                            @else
                                                Não estar presente
                                            @endif
                                        </form>
                                    </td> -->
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('evento/'.$id_evento.'/atividade/'.$a->id_activity.'/presenca/'. $a->id_activiUser) }}">
                                            {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                                 @if($a->presenca==1)
                                                    <input type="hidden" name="presenca" value="0">
                                                    <button type="submit" id="" name="" class="btn btn-danger ">
                                                        Desativar
                                                    </button>
                                              @else
                                            <input type="hidden" name="presenca" value="1">
                                               <button type="submit" id="" name="" class="btn btn-success">Ativar
                                            </button>
                                    @endif
                                        </form>
                                    </td>

                                </tr>
                            </tbody>
                            @empty

                                <p>No activities</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
