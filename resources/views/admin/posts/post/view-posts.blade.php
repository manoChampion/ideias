@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('create-post') }}" class="btn btn-primary" style="color: #FFF;">Criar Post</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Post</th>
                                <th>Usuário</th>
                                <td>Tipo de Publicação</td>
                                <th>Cursos</th>
                                <th>Tipo</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                <tr>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->user->username }}</td>
                                    <td>{{ $post->type->title }}</td>
                                    <td>{{ $post->coursesToString() }}</td>
                                    <td>
                                        <a href="{{ route('delete-post', $post->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-post', $post->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                    </td>
                                </tr>
                                @empty
                                <h6>Não existem publicações no sistema</h6>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>
@endsection