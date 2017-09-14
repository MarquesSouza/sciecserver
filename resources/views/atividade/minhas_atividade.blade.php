@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Certificados </h3>

                </div>
                <div class="panel-body">

                    <table class="table datatable">


                        <br>
                            <br>
                        <thead>

                        <tr>
                            <th>Evento</th>
                            <th>Tipo de Participação no evento</th>
                            <th>Certificado</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>

                            @foreach ($tipos as $r=>$a)

                                <td>{{ $nome }}</td>
                                <td>{{ $a["tipo"] }}</td>
                                <td>
                                    @if($status!=3)
                                        Nenhum certificado no momento
                                    @else
                                           <a href="{{url('evento/'.$id_evento.'/tipo/'.$a["id"].'/pdf')}}"
                                               class="btn-success btn btn-default btn-sm">Certificado</a>

                                    @endif
                                </td>


                        </tr>
                        </tbody>

                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
