@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
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
                        @forelse ($participations as $ev)

                            <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>
                             <td>{{$ev->status}}</td>
                             <td>
                                 <a href="{{url('participacao/edite {id}')}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                             </td>
                             <td>
                                 <a href="{{url('participacao/delete/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                             </td>


                     </tr>
                    @empty
                        <p>No type_activities</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
