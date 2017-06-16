@extends('app')

@section('content')

    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <a href="{{ url('usuario/cad') }}" class="btn-primary btn btn-default">Novo Usuario</a>
            <br><br>

                <table class="table table-bordered table-inverse">
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>editar</th>
                    <th>excluir</th>
                    <tr>

                        @forelse ($users as $u)

                            <td>{{ $u->name }}</td>
                            <td>{{ $u->cpf }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>
                            <td>
                                <a href="{{url('usuario/edit',$u->id)}}" class="btn btn-success  ">EDITAR</a>
                            </td>
                            <form class="form-horizontal" method="post"
                                  action="{{ url('usuario/delete',$u->id)}}">
                                {!! method_field('PUT') !!}
                                {{csrf_field()}}
                                <td>
                                    <input type="hidden" name="status" value="0">
                                    <button type="submit" id="" name="" class="btn btn-danger">Excluir</button>
                                </td>
                            </form>
                    </tr>

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
