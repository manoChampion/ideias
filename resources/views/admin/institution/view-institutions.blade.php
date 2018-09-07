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
                            <a href="{{ route('create-institution') }}" class="btn btn-primary" style="color: #FFF;">Criar Instituição</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($institutions as $institution)
                                <tr>
                                    <td>{{ $institution->name }}</td>
                                    <td>{{ $institution->description }}</td>
                                    <td>{{ $institution->address }}</td>
                                    <td>{{ $institution->phone }}</td>
                                    <td>
                                        <a href="{{ route('delete-institution', $institution->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-institution', $institution->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                    </td>
                                </tr>
                                @empty
                                <h6>Não existem Instituições no sistema</h6>
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