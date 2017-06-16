@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">

                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!-- INICIO MENSAGEM DE CONFIRMAÇÃO DE INSCRIÇÃO NO EVENTO -->
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Parabéns!</strong> Sua Inscrição Na Atividade Foi Confirmada Com Sucesso!
                        </div>
                        <!-- FINAL MENSAGEM DE CONFIRMAÇÃO DE INSCRIÇÃO NO EVENTO -->

                        <h3 class="panel-title">Atividades do Evento</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Carg. Horária</th>
                                <th>Local</th>
                                <th>Quantidade De Inscritos</th>
                                <th>Inscrição</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                @forelse ($activities as $a)
                                    @if($a->status==1)
                                    <form action="{{url('evento/'.$a->id_evento.'/atividade/insc_atividade/'.$a->id)}}"
                                          method="post">
                                        {{csrf_field()}}

                                        <td>{{ $a->nome }}</td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>{{ $a->hora }}</td>
                                        <td>{{ $a->local }}</td>
                                        <td>{{ $a->qtd_inscritos- $atividadeUser->quantidade($a->id) }}</td>
                                        @if($a->qtd_inscritos>0)
                                        @if($atividadeUser->validaUserAtividade($a->id, $id_user))
                                            <td>
                                                <button type="submit">Confirmar Inscrição</button>

                                            <td>
                                                @else
                                                    <td>
                                                        Ja Inscrito!!
                                                    </td>
                                                    @endif
                                                            @else
                                            <td>
                                                Quantidade de vagras preenchidas!!
                                            </td>
                                                            @endif
                                        </td>
                                    </form>
                                    @endif
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
