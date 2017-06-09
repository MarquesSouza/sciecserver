@extends('app')

@section('content')
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
                        <p>No type_activity_users</p>
                    @endforelse

                    <table class="table">
            </div>
        </div>
    </div>
@endsection