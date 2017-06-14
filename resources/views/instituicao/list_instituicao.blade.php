@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
            <a href="{{ url('instituicao/cad') }}" class="btn btn-primary ">Nova Instituiçao</a>


                <table class="table table-bordered table-hover">
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Site</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <tr>
                        @forelse ( $instutions as $u)

                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->descricao }}</td>
                            <td>{{ $u->site }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>
                            <td>
                                <a href="{{url('instituicao/edit',$u->id)}}" class="btn btn-success">EDITAR</a>
                            </td>

                                <form class="form-horizontal" method="post" action="{{ url('instituicao/delete', $u->id) }}">
                                    {{csrf_field()}}
                                    <td>
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
@endsection
