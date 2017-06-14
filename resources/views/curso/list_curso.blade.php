@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
            <a href="{{ url('curso/cad') }}" class="btn btn-primary ">Novo Curso</a>
                   <table class="table table-bordered ">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Editar</th>
                    <th>Excluir</th>

                    <tr>
                        @forelse ($courses as $c)

                            <td>{{ $c->nome }}</td>
                            <td>{{ $c->descricao }}</td>
                            <td>
                                <a href="{{url('curso/edit',$c->id)}}" class="btn btn-success ">EDITAR</a>
                            </td>
                            <td>
                                <a href="{{url('curso/delete/{id}')}}" class="btn btn-danger">EXCLUIR</a>
                            </td>

                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse

                    </table>
               </div>
            </div>
        </div>
    </div>
@endsection
