@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Frequencia da Atividade</h3>

                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <br>
                        <br>
                        <table class="table datatable">
                            <thead>

                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Data de Entrada</th>
                                <th>Data de Sainda</th>
                                <th>Presença</th>
                                <th>Entrada</th>
                                <th>Saida</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                @forelse ($lista as $a)

                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->email }}</td>
                                    <td>{{ $a->telefone }}</td>
                                    <td>{{ $a->data_entrada }}</td>
                                    <td>{{ $a->data_saida }}</td>
                                    <td>@if($a->frequencia==0)

                                        @else
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>


                            </tr>
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
