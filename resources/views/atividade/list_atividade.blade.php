@extends('app2')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Atividades do Evento</h3>

                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <a href="{{ url('evento/'.$id_evento.'/atividade/cad') }}" class="btn btn-primary">Nova Atividade</a>
                            <br>
                            <br>
                        <table class="table datatable">
                            <thead>

                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Status</th>
                                <th>Carg. Horária</th>
                                <th>Local</th>
                                <th>QTD Inscritos</th>
                                <th>Frequencia</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                @forelse ($activities as $a)

                                            <td>{{ $a->nome }}</td>
                                            <td>{{ $a->descricao }}</td>
                                            <td>{{ $a->status }}</td>
                                            <td>{{ $a->hora }}</td>
                                            <td>{{ $a->local }}</td>
                                            @if($a->qtd_inscritos>1)
                                            <td>{{ $a->qtd_inscritos- $atividadeUser->quantidade($a->id) }}</td>
                                            @else
                                                <td>
                                                    Quantidade de vagras preenchidas!!
                                                </td>
                                            @endif
                                            <td>
                                            <a href="{{url('evento/'.$id_evento.'/atividade/frequencia/'.$a->id)}}"
                                           class="btn-success btn btn-default btn-sm">Frequencia</a>
                                            </td>
                                            <td>
                                                <a href="{{url('evento/'.$id_evento.'/atividade/edit/'.$a->id)}}"
                                                   class="btn-success btn btn-default btn-sm">Editar</a>
                                            </td>
                                            <form class="form-horizontal" method="post"
                                                  action="{{ url('evento/'.$id_evento.'/atividade/delete/'.$a->id) }}">
                                                {!! method_field('PUT') !!}
                                                {{csrf_field()}}
                                                <td>
                                                    @if($a->status == 1)
                                                        <input type="hidden" name="status" value="0">
                                                        <button type="submit" id="" name="" class="btn btn-danger ">Desativar </button>
                                                    @else
                                                        <input type="hidden" name="status" value="1">
                                                        <button type="submit" id="" name="" class="btn btn-primary">Ativar </button>
                                                    @endif
                                                </td>
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
