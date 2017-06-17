@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            < class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tipo_de_Usuario</h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <a href="{{ url('usuario/tipo/cad') }}" class="btn btn-primary">Novo Tipo Usuario</a>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    </thead>
                    @forelse ($typeUsers as $tu)
                        @if($tu->status == 1)
                            <tbody>
                            <tr>
                                <td>{{ $tu->nome }}</td>
                                <td>{{ $tu->descricao }}</td>
                                <th>{{$tu->status }}</th>
                                <td>
                                    <a href="{{url('usuario/tipo/edit',$tu->id)}}" class="btn btn-success">Editar</a>
                                </td>
                                <form class="form-horizontal" method="post"
                                      action="{{ url('usuario/tipo/delete',$tu->id) }}">
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
                        <p>No type_users</p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
