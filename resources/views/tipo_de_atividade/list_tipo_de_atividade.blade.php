@extends('app2')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tipo_Atividade</h3>
                </div>
                <a href="{{ url('atividade/tipo/cad') }}" class="btn btn-primary">Novo Tipo Atividade</a>
                <br><br>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <th>Nome</th>
                        <th>Descricão</th>
                        <th>Status</th>
                        <th>Editar</th>
                        <th>Ativar / Desativar</th>
                        </thead>
                        @forelse ($typeActivities as $ta)

                                <tbody>
                                <tr>
                                    <td>{{ $ta->nome }}</td>
                                    <td>{{ $ta->descricao }}</td>
                                    <th>{{$ta->status}}</th>
                                    <td>
                                        <a href="{{url('atividade/tipo/edit',$ta->id)}}"
                                           class="btn btn-success">Editar</a>
                                    </td>
                                    <form class="form-horizontal" method="post"
                                          action="{{ url('atividade/tipo/delete',$ta->id) }}">
                                        {!! method_field('PUT') !!}
                                        {{csrf_field()}}
                                        <td>
                                            @if($ta->status == 1)
                                                <input type="hidden" name="status" value="0">
                                                <button type="submit" id="" name="" class="btn btn-danger ">Desativar </button>
                                            @else
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" id="" name="" class="btn btn-primary">Ativar </button>
                                            @endif
                                        </td>
                                    </form>
                                </tr>
                                </tbody>

                        @empty
                            <p>No type_activities</p>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
