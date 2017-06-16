@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('instituicao/cad') }}" class="btn-primary btn btn-default">Nova Instituiçao</a>
            <br><br>

            <table class="table table-bordered table-hover">
                <th>Nome</th>
                <th>Descricão</th>
                <th>Site</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
                <tr>
                    <td>
                        <a href="{{url('instituicao/edit',$u->id)}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                    </td>



                    <form class="form-horizontal" method="post"
                          action="{{ url('instituicao/delete', $u->id) }}">
                        {!! method_field('PUT') !!}
                        {{csrf_field()}}
                        <td>
                            <input type="hidden" name="status" value="0">
                            <button type="submit" id="" name="" class="btn btn-danger">Excluir</button>
                        </td>
                    </form>
                    @forelse ( $instutions as $u)
                        @if($u->status == 1)
                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->descricao }}</td>
                            <td>{{ $u->site }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>


                </tr>
                @endif

                @empty
                    <p>No type_users</p>
                @endforelse


            </table>

        </div>
    </div>
@endsection
