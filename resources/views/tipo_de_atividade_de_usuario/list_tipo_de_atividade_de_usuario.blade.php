@extends('app')

@section('content')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
            <a href="{{ url('usuario/atividade/config/cad') }}" class="btn btn-primary ">Novo Tipo Atividade Usuario</a>

                <table class="table table-bordered">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Status</th>
                    <th>Editar </th>
                    <th>Excluir </th>
                     <tr>
                        @forelse ($typeActivityUsers as $ev)

                            <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>
                             <th>{{$ev->status}}</th>
                             <td>
                                 <a href="{{url('usuario/atividade/config/edit/{id)')}}" class="btn btn-success ">EDITAR</a>
                             </td>
                             <td>
                                 <a href="{{url('usuario/atividade/config/cad/delete/{id}')}}" class="btn btn-danger">EXCLUIR</a>
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
