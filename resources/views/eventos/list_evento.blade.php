@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="c   ol-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>
                    <th>Status </th>
                    <th>Local </th>
                    <th>Data de Início </th>
                    <th>Data de Conclusão</th>
                    <th>Logo do Evento</th>


                     <tr>
                        @forelse ($events as $ev)

                            <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>
                            <td>{{ $ev->status }}</td>
                            <td>{{ $ev->local }}</td>
                            <td>{{ $ev->data_inicio }}</td>
                            <td>{{ $ev->data_conclusao }}</td>
                            <td>{{ $ev->logoEvento }}</td>

                    </tr>
                    @empty
                        <p>No events</p>
                    @endforelse

                    <table class="table">
            </div>
        </div>
    </div>
@endsection
