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
                            <a href="{{ route('create-user') }}" class="btn btn-primary" style="color: #FFF;">Criar Usuário</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>E-mail</th>
                                <th>Cargos</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->rolesToString($user->id))
                                           {{ $user->rolesToString($user->id) }} 
                                        @else
                                            Não existem cargos atribuídos a este usuário.
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('delete-user', $user->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-user', $user->id) }}"><i class="fa fa-edit"></i> Editar</a>
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