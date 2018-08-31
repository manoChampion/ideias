@extends('layouts.app')

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
                            <a href="{{ route('create-type-post') }}" class="btn btn-primary" style="color: #FFF;">Criar Novo Tipo</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($types as $type)
                                <tr>
                                    <td>{{ $type->title }}</td>
                                    <td>{{ $type->label }}</td>
                                    <td>
                                        <a href="{{ route('delete-type-post', $type->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-type-post', $type->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                    </td>
                                </tr>
                                @empty
                                <h6>Não há tipos cadastrados</h6>
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