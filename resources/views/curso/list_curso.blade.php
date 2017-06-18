@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Eventos em Andamento</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('curso/cad') }}" class="btn-primary btn btn-default">Novo Curso</a>
                    <br><br>
                    <table class="table datatable">
                        <thead>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Editar</th>
                        <th>Ativar / Desativar</th>
                        </thead>
                        @forelse ($courses as $c)
                            <tbody>
                            <tr>
                                <td>{{ $c->nome }}</td>
                                <td>{{ $c->descricao }}</td>
                                <td><a href="{{url('curso/edit',$c->id)}}"
                                       class="btn btn-success">Editar</a>
                                </td>
                                <form class="form-horizontal" method="post"
                                      action="{{ url('curso/delete', $c->id) }}">
                                    {!! method_field('PUT') !!}
                                    {{csrf_field()}}
                                    <td>
                                        @if($c->status == 1)
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
                            <p>No users</p>
                        @endforelse

                    </table>

                </div>
            </div>
@endsection
