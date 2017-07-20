@extends('app2')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Quantidade de Inscritos</h3>

                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <br>
                        <br>

                        <table class="table datatable">
                            <thead>
                            <a href="{{ url('evento/'.$id_evento.'}/frequencia/pdf') }}" class="btn btn-primary">Lista PDF</a>

                            <tr>
                                <th>Usuario</th>
                                <th>CPF</th>
                                  </tr>
                            </thead>

                            <tbody>

                            @forelse ($lista as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->cpf }}</td>

                                </tr>
                            </tbody>
                            @empty

                                <p>No Cadastros</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
