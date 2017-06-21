@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Atividades do Evento</h3>

                </div>
                <div class="panel-body">

                    <table class="table datatable">
                        @if($status!=3)

                            <a href="{{url('evento/'.$id_evento.'/atividade/insc_atividade')}}"> <!--Inserir link rota cadastro de atividade -->
                                <button class="btn btn-success">Cadastrar Atividade</button>
                            </a>
                        @endif
                        <br>
                            <br>
                        <thead>

                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Carg. Horária</th>
                            <th>Local</th>
                            <th>Certificados</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            @forelse ($activities as $a)

                                    <form action="{{url('evento/'.$a->id_evento.'/atividade/insc_atividade/'.$a->id)}}"
                                          method="post">
                                        {{csrf_field()}}
                                        <td>{{ $a->nome }}</td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>{{ $a->status }}</td>
                                        <td>{{ $a->hora }}</td>
                                        <td>{{ $a->local }}</td>

                                        <td>
                                            @if($status==3)
                                            <a href="{{url('evento/'.$a->id_evento.'/atividade/'.$a->id.'/pdf')}}"
                                               class="btn-success btn btn-default btn-sm">Visualizar</a>
                                            @endif

                                        </td>

                                        </td>
                                    </form>

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
