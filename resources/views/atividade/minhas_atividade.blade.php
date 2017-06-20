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

                                <thead>

                                <tr>

                                    @if($status==3)
                                        Evento Concluido
                                    @else
                                        <a href="{{url('evento/'.$id_evento.'/atividade/insc_atividade')}}"> <!--Inserir link rota cadastro de atividade -->
                                            <button class="btn btn-success">Cadastrar em uma Atividade</button>
                                        </a>
                                    @endif
                                    <br>
                                    <br>
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
                                        @if($a->status==1)
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
                                                    <a href="{{url('usuario/config/edit/{id}')}}"
                                                       class="btn-success btn btn-default btn-sm">Visualizar</a>
                                                        @else
                                                        Certificado Indisponivel!
                                                        @endif
                                                </td>

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
