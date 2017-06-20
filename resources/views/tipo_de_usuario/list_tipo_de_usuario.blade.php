@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tipo_de_Usuario</h3>
            </div>
            <a href="{{ url('usuario/tipo/cad') }}" class="btn btn-primary">Novo Tipo Usuario</a>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Ativar / Desativar</th>
                    </thead>
                    @forelse ($typeUsers as $tu)

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
                                        @if($tu->status == 1)
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
                        <p>No type_users</p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
