@extends('app2')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Artigos</h3>
                    </div>
                    <a href="{{ url('artigo/cad') }}" class="btn btn-primary">Novo Artigo</a>
                    <br><br>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <th>Nome</th>
                                <th>Descricao</th>
                                <th>Autores</th>
                                <th>Subtitulo</th>
                                <th>Situação</th>
                                <th>Editar</th>
                                <th>Ativar / Desativar</th>
                            </thead>
                            @forelse ($articles as $a)
                                <tbody>
                                <tr>
                                    <td>{{ $a->titulo }}</td>
                                    <td>{{ $a->resumo }}</td>
                                    <td>{{ $a->autores }}</td>
                                    <td>{{ $a->subtitulo }}</td>
                                    <td>{{ $a->situacao }}</td>
                                    <td><a href="{{url('artigo/edit',$a->id)}}"
                                           class="btn btn-success">Editar</a>
                                    </td>
                                    <form class="form-horizontal" method="post"
                                          action="{{ url('artigo/delete', $a->id) }}">
                                        {!! method_field('PUT') !!}
                                        {{csrf_field()}}
                                        <td>
                                            @if($a->status == 1)
                                                <input type="hidden" name="status" value="0">
                                                <button type="submit" id="" name="" class="btn btn-danger ">Desativar </button>
                                            @else
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" id="" name="" class="btn btn-primary">Ativar </button>
                                            @endif
                                        </td>
                                    </form>
                                </tr>
                                </tbody>
                            @empty
                                <p>No users</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection