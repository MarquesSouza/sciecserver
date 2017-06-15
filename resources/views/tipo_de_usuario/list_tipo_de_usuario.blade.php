@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ url('usuario/config/cad') }}" class="btn-primary btn btn-default">Novo Tipo Usuario</a>
                        <table class="table table-bordered table-inverse">
                            <th>Nome</th>
                            <th>Descricão</th>
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                                @forelse ($typeUsers as $tu)
                                @if($tu->status == 1)
                                <tr>
                                    <td>{{ $tu->nome }}</td>
                                    <td>{{ $tu->descricao }}</td>
                                    <th>{{$tu->status }}</th>
                                    <td>
                                        <a href="{{url('usuario/config/edit',$tu->id)}}" class="btn-success btn btn-default btn-sm">Editar</a>
                                    </td>
                                    <form class="form-horizontal" method="post"
                                          action="{{ url('usuario/config/delete',$tu->id) }}">
                                        {!! method_field('PUT') !!}
                                        {{csrf_field()}}
                                        <td>
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit" id="" name="" class="btn btn-danger">Excluir</button>
                                        </td>
                                    </form>
                                </tr>
                            @endif
                            @empty
                                <p>No type_users</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
