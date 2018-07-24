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
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('create-role') }}" class="btn btn-primary" style="color: #FFF;">Criar Cargo</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Cargo</th>
                                <th>Label</th>
                                <th>Permissões</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->label }}</td>
                                    <td>
                                        @if($role->permissionsToString($role->id))
                                        {{ $role->permissionsToString($role->id) }}
                                            @else
                                                Não existem permissões atribudas a este cargo.
                                            @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('delete-role', $role->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                    </td>
                                </tr>

                                @empty
                                    <h1>Não existem cargos no sistema</h1>
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