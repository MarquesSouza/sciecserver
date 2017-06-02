@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="jumbotron">
        <div class="col-sm-10 col-md-7">
            <h3><b>Titulo do evento</b></h3>
            <div class="thumbnail">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>
        <br><br>
        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo
            utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou
            para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
            para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando
            a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser
            integrado a softwares de editoração eletrônica como Aldus PageMaker.</p><br>
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
        </div>
    </div>
@endsection