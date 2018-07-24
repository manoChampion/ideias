@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Lista de Permissões</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('create-permission') }}" class="btn btn-primary" style="color: #FFF;">Criar Permissão</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Permissão</th>
                                <th>Label</th>
                                <th>Cargos</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->label }}</td>
                                    <td>
                                        @if($permission->rolesToString($permission->id))
                                        {{ $permission->rolesToString($permission->id) }}
                                            @else
                                                Não existem cargos que possuam esta permissão.
                                            @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('delete-permission', $permission->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                    </td>
                                </tr>

                                @empty
                                    <h1>Não existem permissões no sistema</h1>
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