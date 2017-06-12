@extends('app')
@section('content')
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
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
                                <th>Status</th>
                                <th>Carg. Horária</th>
                                <th>Local</th>
                                <th>QTD Inscritos</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @forelse ($activities as $a)
                                    <form action="{{url('evento/'.$a->id_evento.'/atividade/insc_atividade/'.$a->id)}}"
                                          method="post"><
                                        {{csrf_field()}}
                                        <td>{{ $a->nome }}</td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>{{ $a->status }}</td>
                                        <td>{{ $a->hora }}</td>
                                        <td>{{ $a->local }}</td>
                                        <td>{{ $a->qtd_inscritos }}</td>
                                        <td>
                                            <a href="{{url('usuario/config/edit/{id}')}}" class="btn-success btn btn-default btn-sm">Editar</a>
                                        </td>
                                        <td>
                                            <a href="{{url('usuario/config/edit/{id}')}}" class="btn danger-color  btn-default btn-sm">Excluir</a>
                                        </td>
                                    </form>
                            </tr>
                            </tbody>
                            @empty

                                <p>No activities</p>
                            @endforelse
                        </table>
                        <a> <!--Inserir link rota cadastro de atividade -->
                            <button class="btn btn-success">Cadastrar Atividade</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
