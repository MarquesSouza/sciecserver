@extends('app')

@section('content')
    <br><br><br><br>
    <!-- Default panel contents -->
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3>Titulo do Evento</h3></div>
            <!-- List group -->
            <!-- foreach -->
            <ul class="list-group-item"><h4>Tipo de Atividade</h4>
                <li class="list-group-item">Sobre:</li>
                <li class="list-group-item">Instrutor:</li>
                <li class="list-group-item">Carga Horária:</li>
                <li class="list-group-item">Data / Hora Inicio:</li>
                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta Atividade?</p>
                    <input type="radio" name="opcao" value="1"> Sim
                    <input type="radio" name="opcao" checked value="1"> Não
                </li>
            </ul>
            <!-- endforeach -->
            <ul class="list-group-item"><h4>Tipo de Atividade</h4>
                <li class="list-group-item">Sobre:</li>
                <li class="list-group-item">Instrutor:</li> <!-- Puxar organizadores do Evento -->
                <li class="list-group-item">Carga Horária:</li>
                <li class="list-group-item">Data / Hora Inicio:</li>
                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta Atividade?</p>
                    <input type="radio" name="opcao" value="1"> Sim
                    <input type="radio" name="opcao" checked value="1"> Não
                </li>
            </ul>
            <ul class="list-group-item"><h4>Tipo de Atividade</h4>
                <li class="list-group-item">Sobre:</li>
                <li class="list-group-item">Instrutor:</li> <!-- Puxar organizadores do Evento -->
                <li class="list-group-item">Carga Horária:</li>
                <li class="list-group-item">Data / Hora Inicio:</li>
                <li class="list-group-item list-group-item-success"><p>Deseja se inscrever nesta Atividade?</p>
                    <input type="radio" name="opcao" value="1"> Sim
                    <input type="radio" name="opcao" checked value="1"> Não
                </li>
            </ul>
            <p class="text-center"><a href="#" class="btn btn-success" role="button">Enviar Inscrição</a>
                <a href="{{ url('/') }}" class="btn btn-danger" role="button">Voltar</a></p>
            <!-- endforeach // Passar Parametros Acima -->
        </div>
    </div>
@endsection