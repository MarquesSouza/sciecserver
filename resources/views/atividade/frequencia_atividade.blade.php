@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Frequencia da Atividade</h3>

                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <br>
                        <br>
                        <table class="table datatable">
                            <thead>

                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Data de Entrada</th>
                                <th>Data de Saida</th>
                                <th>Entrada</th>
                                <th>Saida</th>
                                <th>Presença</th>
                            </tr>
                            </thead>

                            <tbody>

                            @forelse ($lista as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->email }}</td>
                                    <td>{{ $a->telefone }}</td>
                                    <td>{{ $a->data_entrada }}</td>
                                    <td>{{ $a->data_saida }}</td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('evento/'.$id_evento.'/atividade/entrada/'. $id) }}">
                                            {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                            @if($a->presenca==1)
                                                <input type="hidden" name="id_user" value="{{$a->id}}">
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
                                              action="{{ url('evento/'.$id_evento.'/atividade/saida/'. $id) }}">
                                            {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                            @if($a->presenca==1)
                                                <input type="hidden" name="id_user" value="{{$a->id}}">
                                                <button type="submit" id="" name="" class="btn btn-danger ">
                                                    Saida
                                                </button>
                                            @else
                                                Não estar presente
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('evento/'.$id_evento.'/atividade/presenca/'. $id) }}">
                                            {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                    @if($a->presenca==1)
                                                    <input type="hidden" name="presenca" value="0">
                                                    <input type="hidden" name="id_user" value="{{$a->id}}">
                                                    <button type="submit" id="" name="" class="btn btn-danger ">
                                                        Desativar
                                                    </button>




                                    @else
                                            <input type="hidden" name="presenca" value="1">
                                                <input type="hidden" name="id_user" value="{{$a->id}}">

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
