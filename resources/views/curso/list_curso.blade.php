@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Eventos em Andamento</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <a href="{{ url('curso/cad') }}" class="btn-primary btn btn-default">Novo Curso</a>
                    <br><br>
                    <table class="table datatable">
                        <thead>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                        </thead>
                        @forelse ($courses as $c)
                            <tbody>
                            <tr>
                                <td>{{ $c->nome }}</td>
                                <td>{{ $c->descricao }}</td>
                                <td>
                                    <a href="{{url('curso/edit',$c->id)}}" class="btn btn-success">EDITAR</a>
                                </td>
                                <td>
                                    <a href="{{url('curso/delete/{id}')}}" class="btn btn-danger">EXCLUIR</a>
                                </td>

                            </tr>
                            </tbody>
                        @empty
                            <p>No users</p>
                        @endforelse

                    </table>

                </div>
            </div>
@endsection
