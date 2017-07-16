@extends('app2')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Inscrição da Atividade</h3>

                </div>
                <div class="panel-body">
                    <div class="panel-body">

                        <form class="form-horizontal" method="post"
                              action="{{ url('evento/'.$id_evento.'/atividade/'.$id.'/entrada/') }}" >
                            {!! method_field('PUT') !!}
                            {{csrf_field()}}

                        <br>
                        <br>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>CPF</th>
                                <th>Inscrição</th>

                            </tr>
                            </thead>

                            <tbody>

                            @forelse ($lista as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->cpf }}</td>
                                    <td>
                                        <button type="submit" id="" name="" class="btn btn-primary">Inscrever </button>
                                    </td>>

                            </tbody>
                            @empty

                                <p>No activities</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
