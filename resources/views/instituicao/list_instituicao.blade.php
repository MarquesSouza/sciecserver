@extends('app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Instituições Cadastradas</h3>
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
                            <th>Ativar / Desativar</th>
                            </thead>

                            @forelse ( $instutions as $u)

                                    <tbody>
                                    <tr>
                                        <td>{{ $u->nome }}</td>
                                        <td>{{ $u->descricao }}</td>
                                        <td>{{ $u->site }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->telefone }}</td>
                                        <td><a href="{{url('instituicao/edit',$u->id)}}"
                                               class="btn btn-success">Editar</a>
                                        </td>
                                        <form class="form-horizontal" method="post"
                                              action="{{ url('instituicao/delete', $u->id) }}">
                                            {!! method_field('PUT') !!}
                                            {{csrf_field()}}
                                            <td>
                                                @if($u->status == 1)
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
        </div>
@endsection
