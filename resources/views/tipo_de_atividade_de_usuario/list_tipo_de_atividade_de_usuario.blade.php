@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <a href="{{ url('usuario/atividade/config/cad') }}" class="btn-primary btn btn-default">Novo Tipo Atividade Usuario</a>
            <br><br>
                <table class="table table-bordered table-inverse">
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
                                 <a href="{{url('usuario/atividade/config/edit/{id)')}}" class="btn-success btn btn-default btn-sm">EDITAR</a>
                             </td>
                             <td>
                                 <a href="{{url('usuario/atividade/config/cad/delete/{id}')}}" class="btn danger-color  btn-default btn-sm">EXCLUIR</a>
                             </td>


                    </tr>
                    @empty
                        <p>No type_activities</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
