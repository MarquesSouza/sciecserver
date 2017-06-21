@extends('app2')
@section('content')
    <div class="content text-center">
        <div class="row">
            @forelse ($evento as $i)
                @if($i->status==1)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('img/certificado/logoIF.png')}}" class="img-responsive" style="width:100%"
                                 alt="Image">
                            <h4>{{$i->nome}}</h4>
                        </div>
                        <p><a href="{{url('evento/show/'.$i->id)}}" class="btn btn-success"
                              role="button">Inscreva-se!</a>
                           </p>
                    </div>

                @endif

            @empty
                <p>Nenhum evento cadastrado</p>
            @endforelse

        </div>
    </div>
@endsection
