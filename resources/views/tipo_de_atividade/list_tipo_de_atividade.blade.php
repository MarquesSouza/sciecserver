@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <div class="c   ol-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricão </th>


                     <tr>
                        @forelse ($events as $ev)

                            <td>{{ $ev->nome }}</td>
                            <td>{{ $ev->descricao }}</td>


                    </tr>
                    @empty
                        <p>No type_activities</p>
                    @endforelse

                    </table>
            </div>
        </div>
    </div>
@endsection
