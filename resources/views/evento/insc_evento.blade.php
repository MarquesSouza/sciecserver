@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <!-- foreach -->
    <div class="jumbotron">
        <div class="col-sm-10 col-md-8">
            <h3><b>{{$e->nome}}</b></h3>
            <div class="thumbnail">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>
        <br><br>
        <p>{{$e->descricao}}</p><br>
        <p><a class="btn btn-default btn-lg" href="#" role="button">Ler Mais...</a></p>
        <hr class="hr-light">
        <div class="container-fluid">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Informações sobre o Evento...</div>
                <div class="panel-body">
                    <p>Descrição_do_Evento</p>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">Organização:</li> <!-- Puxar organizadores do Evento -->
                    <li class="list-group-item">Dia, Hora:</li>
                    <li class="list-group-item">Endereço:</li>
                    <li class="list-group-item">Site do Evento:</li> <!-- Puxar URL do site do Evento -->
                    <li class="list-group-item">Instituição:</li> <!-- Puxar Instituição/Local do Evento -->
                    <li class="list-group-item">Vagas:</li> <!-- Puxar Vagas do Evento -->
                    <li class="list-group-item">Carga Horária</li> <!-- Puxar Carga horária do Evento -->
                    <li class="list-group-item">Possui Certificado:</li> <!-- Puxar se o evento possui certificado do Evento -->
                    <li class="list-group-item">Ver Atividade/Minicursos: <a href="#" class="btn btn-primary" role="button">Clique Aqui!</a></li> <!-- Puxar Listar Atividades ou minicurso do Evento -->
                </ul>
                <br>
                <p class="text-center"><a href="#" class="btn btn-success" role="button">Inscreva-se!</a> <a href="{{ url('/') }}" class="btn btn-danger" role="button">Voltar</a></p>
            </div>
            <!-- endforeach // Passar Parametros Acima -->
        </div>
    </div>
@endsection