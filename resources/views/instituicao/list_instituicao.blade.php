@extends('app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Instituições Cadastradas</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('instituicao/cad') }}" class="btn btn-primary">Nova Instituiçao</a>
                        <br><br>
                        <table class="table datatable">
                            <thead>
                            <th>Nome</th>
                            <th>Descricão</th>
                            <th>Site</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                            </thead>

                            @forelse ( $instutions as $u)
                                @if($u->status == 1)
                                    <tbody>
                                    <tr>
                                        <td>{{ $u->nome }}</td>
                                        <td>{{ $u->descricao }}</td>
                                        <td>{{ $u->site }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->telefone }}</td>
                                        <td><a href="{{url('instituicao/edit',$u->id)}}"
                                               class="btn btn-success">EDITAR</a>
                                        </td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('instituicao/delete', $u->id) }}">
                                            {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                            <td>
                                                <input type="hidden" name="status" value="0">
                                                <button type="submit" id="" name="" class="btn btn-danger">Excluir
                                                </button>
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
        </div>
@endsection
