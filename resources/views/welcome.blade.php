@extends('app')
@section('content')

    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ asset('imagens/slide1.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>
                            <a class="btn btn-success" href="#" role="button">Inscreva-se</a>
                            <a class="btn btn-primary" href="#" role="button">Mais Informações</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="{{ asset('imagens/slide2.jpg') }}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>
                            <a class="btn btn-success" href="#" role="button">Inscreva-se</a>
                            <a class="btn btn-primary" href="#" role="button">Mais Informações</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="{{ asset('imagens/slide3.jpg') }}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>
                            <a class="btn btn-success" href="#" role="button">Inscreva-se</a>
                            <a class="btn btn-primary" href="#" role="button">Mais Informações</a>
                        </p>
                    </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->
    <!-- Barra de Pesquisa -->
    <div ng-cloak>
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <div class="col-md-4">
                        <input type="text" class="" ng-model="filtroCampoTexto" placeholder="Pesquisar por eventos">
                    </div>
                    <div class="col-md-3">
                        <select name="selectEstado"
                                class="form-control"
                                ng-model="filtroEstado"
                                ng-options=""> <!-- Colocar  Array Estados -->
                            <option value="" selected>Todos os Estados</option>
                        </select>

                    </div>
                    <div class="col-md-3">
                        <select name="selectArea"
                                class="form-control"
                                ng-model="filtroGrandeArea"
                                ng-options=""> <!-- Colocar Array Categorias de Evento -->
                            <option value="" selected>Todas as Áreas</option>
                        </select>
                    </div>
                    <div class="col-md-2 block">
                        <button class="btn btn-primary" ng-click="filtrarBusca(filtro)" btn-loading="" data-loading-text="Buscando..." loading>
                            <i class="fa fa-search fa-fw"></i>
                            Encontrar
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Barra de Pesquisa -->
        <!-- Lista de Eventos -->
        <div class="container text-center">
            <h3 class="text-center"><b>Eventos em Andamento</b></h3> <br>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <h4>Titulo do evento</h4>
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Inscreva-se!</a> <a href="#" class="btn btn-default" role="button">Mais Informações</a></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <h4>Titulo do evento</h4>
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Inscreva-se!</a> <a href="#" class="btn btn-default" role="button">Mais Informações</a></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <h4>Titulo do evento</h4>
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Inscreva-se!</a> <a href="#" class="btn btn-default" role="button">Mais Informações</a></p>
                </div><br><br><br><br>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <h4>Titulo do evento</h4>
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Inscreva-se!</a> <a href="#" class="btn btn-default" role="button">Mais Informações</a></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <h4>Titulo do evento</h4>
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Inscreva-se!</a> <a href="#" class="btn btn-default" role="button">Mais Informações</a></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <h4>Titulo do evento</h4>
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Inscreva-se!</a> <a href="#" class="btn btn-default" role="button">Mais Informações</a></p>
                </div>
            </div>
        </div>
    </div>
        <!--Lista de Eventos-->
        @endsection

