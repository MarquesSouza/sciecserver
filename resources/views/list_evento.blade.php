@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Telefone </th>

                    <tr>
                        @forelse ($events as $evento)

                            <td>{{ $evento->nome }}</td>
                            <td>{{ $evento->descricao }}</td>
                            <td>{{ $evento->telefone }}</td>
                            <td>{{ $evento->status }}</td>
                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse

                    <table class="table">
            </div>
        </div>
    </div>
@endsection
