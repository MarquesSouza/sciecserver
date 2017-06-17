@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tipo_Atividade</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
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
                        <th>Excluir</th>
                        </thead>
                        @forelse ($typeActivities as $ta)
                            @if($ta->status == 1)
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
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit" id="" name="" class="btn btn-danger">Excluir</button>
                                        </td>
                                    </form>
                                </tr>
                                </tbody>
                            @endif
                        @empty
                            <p>No type_activities</p>
                        @endforels
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
