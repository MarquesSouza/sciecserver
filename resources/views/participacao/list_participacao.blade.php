@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Participaçao</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <a href="{{ url('participacao/cad') }}" class="btn btn-primary">Nova Participação</a>
                    <br><br>
                    <table class="table dataTable">
                        <thead>
                        <th>Nome</th>
                        <th>Descricão</th>
                        <th>Status</th>
                        <th>Editar</th>
                        <th>Ativar / Desativar</th>
                        </thead>
                        @forelse ($participations as $part)
                                <tbody>
                                <tr>
                                    <td>{{ $part->nome }}</td>
                                    <td>{{ $part->descricao }}</td>
                                    <td>{{$part->status}}</td>
                                    <td><a href="{{url('participacao/edit',$part->id)}}"
                                           class="btn btn-success">Editar</a>
                                    </td>
                                    <form class="form-horizontal" method="post"
                                          action="{{ url('participacao/delete', $part->id) }}">
                                        {!! method_field('PUT') !!}
                                        {{csrf_field()}}
                                        <td>
                                            @if($part->status == 1)
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
@endsection
