@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('participacao/cad') }}" class="btn-primary btn btn-default">Nova participacao</a>
            <br><br>
                <table class="table table-bordered table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                     <tr>
                        @forelse ($participations as $part)
                             @if($part->status == 1)
                            <td>{{ $part->nome }}</td>
                            <td>{{ $part->descricao }}</td>
                             <td>{{$part->status}}</td>
                             <td>
                                 <a href="{{url('participacao/edit',$part->id)}}" class="btn-success btn btn-default btn-sm">Editar</a>
                             </td>
                             <form class="form-horizontal" method="post"
                                   action="{{ url('participacao/delete',$part->id)}}">
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
