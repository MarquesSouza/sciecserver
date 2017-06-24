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
                            @else
                            <a href="{{url('evento/'.$id_evento.'/pdf')}}"
                               class="btn-success btn btn-default btn-sm">Certificado</a>

                        @endif

                        <br>
                            <br>
                        <thead>

                        <tr>
                            <th>Atividade</th>
                            <th>Descrição da Atividade</th>
                            <th>Tipo de Participação</th>
                            <th>Carg. Horária</th>
                            <th>Local</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            @foreach ($retorno as $r=>$a)


                                        <td>{{ $a->atividade }}</td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>{{ $a->tipo_atividade_user }}</td>
                                        <td>{{ $a->qtdhoras }}</td>
                                        <td>{{ $a->local }}</td>



                        </tr>
                        </tbody>

                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
