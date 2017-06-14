@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
            <a href="{{ url('participacao/cad') }}" class="btn btn-primary ">Nova participacao</a>

                <table class="table table-bordered">
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
                                 <a href="{{url('participacao/edite {id}')}}" class="btn btn-success">EDITAR</a>
                             </td>
                             <td>
                                 <a href="{{url('participacao/delete/{id}')}}" class="btn btn-danger">EXCLUIR</a>
                             </td>


                     </tr>
                    @empty
                        <p>No type_activities</p>
                    @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
