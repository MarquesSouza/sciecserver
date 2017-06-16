@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('usuario/tipo/atividade/cad') }}" class="btn-primary btn btn-default">Novo Tipo Atividade Usuario</a>
            <br><br>
                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Status</th>
                    <th>Editar </th>
                    <th>Excluir </th>
                     <tr>
                        @forelse ($typeActivityUsers as $tau)
                            <td>{{ $tau->nome }}</td>
                            <td>{{ $tau->descricao }}</td>
                             <th>{{$tau->status}}</th>
                             <td>
                                 <a href="{{url('usuario/tipo/atividade/edit',$tau->id)}}" class="btn-success btn btn-default btn-sm">Editar</a>
                             </td>

                             <form class="form-horizontal" method="post"
                                   action="{{ url('usuario/tipo/atividade/delete', $tau->id) }}">
                                 {!! method_field('PUT') !!}
                                 {{csrf_field()}}
                                 <td>
                                     <input type="hidden" name="status" value="0">
                                     <button type="submit" id="" name="" class="btn btn-danger">Excluir</button>
                                 </td>
                             </form>

                    </tr>
                    @empty
                        <p>No type_activities</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
