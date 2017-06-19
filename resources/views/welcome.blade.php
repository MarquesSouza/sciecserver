@extends('app')
@section('content')
    <div class="content text-center">
        <div class="row">
            @forelse ($evento as $i)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%"
                             alt="Image">
                        <h4>{{$i->nome}}</h4>
                    </div>
                    <p><a href="{{url('evento/show/'.$i->id)}}" class="btn btn-success"
                          role="button">Inscreva-se!</a>
                        <a href="{{url('evento/detalhar_evento/'.$i->id)}}" class="btn btn-default" role="button">Mais
                            Informações</a></p>
                </div>
            @empty
                <p>Nenhum evento cadastrado</p>
            @endforelse
        </div>
    </div>
    </div>
    <!--Lista de Eventos-->

    </div>
@endsection