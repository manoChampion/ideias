@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Lista de Áreas</strong>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('create-field') }}" class="btn btn-primary" style="color: #FFF;">Criar Área</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Área de Conhecimento</th>
                                <th>Descrição</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($fields as $field)
                                <tr>
                                    <td>{{ $field->name }}</td>
                                    <td>{{ $field->description }}</td>
                                    <td>
                                        <a href="{{ route('delete-field', $field->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-field', $field->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                    </td>
                                </tr>

                                @empty
                                    <h1>Não existem áreas cadastradas no sistema</h1>
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