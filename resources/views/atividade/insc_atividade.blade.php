@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3>Titulo do Evento</h3></div>
            <!-- List group -->


            @foreach($atividade as $a)
            <ul class="list-group-item"><h4>Tipo de Atividade</h4>
                <li class="list-group-item">Atividade: {{$a->nome}}</li>
                <li class="list-group-item">Sobre: {{$a->descricao}}</li>
                <li class="list-group-item">Instrutor:</li>
                <li class="list-group-item">Carga Horária:</li>
                <li class="list-group-item">Data / Hora Inicio:</li>
                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta Atividade?</p>
                    <input type="radio" name="opcao" value="1"> Sim
                    <input type="radio" name="opcao" checked value="1"> Não
                </li>
            </ul>
            @endforeach



            <p class="text-center"><a href="#" class="btn btn-success" role="button">Enviar Inscrição</a>
                <a href="{{ url('/insc_evento') }}" class="btn btn-danger" role="button">Voltar</a></p>
            <!-- endforeach // Passar Parametros Acima -->
        </div>
    </div>
@endsection