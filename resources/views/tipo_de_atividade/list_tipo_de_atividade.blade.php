@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('atividade/config/cad') }}" class="btn-primary btn btn-default">Novo Tipo Atividade</a>
            <br><br>

                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>

                     <tr>
                        @forelse ($typeActivities as $ta)
                             @if($ta->status == 1)
                            <td>{{ $ta->nome }}</td>
                            <td>{{ $ta->descricao }}</td>
                             <th>{{$ta->status}}</th>
                             <td>
                                 <a href="{{url('atividade/config/edit',$ta->id)}}" class="btn-success btn btn-default btn-sm">Editar</a>
                             </td>
                             <form class="form-horizontal" method="post"
                                   action="{{ url('atividade/config/delete',$ta->id) }}">
                                 {!! method_field('PUT') !!}
                                 {{csrf_field()}}
                                 <td>
                                     <input type="hidden" name="status" value="0">
                                     <button type="submit" id="" name="" class="btn btn-danger">Excluir</button>
                                 </td>
                             </form>


                    </tr>
                    @endif
                    @empty
                        <p>No type_activities</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
