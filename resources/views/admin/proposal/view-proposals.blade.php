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
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('create-proposal') }}" class="btn btn-primary" style="color: #FFF;">Criar Proposta</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Dono</th>
                                <th>Proposta</th>
                                <th>Áreas</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($proposals as $proposal)
                                <tr>
                                    <td>{{ $proposal->user->username }}</td>
                                    <td>{{ $proposal->description }}</td>
                                    <td>
                                        @if($proposal->courses())
                                            {{ $proposal->courses()->get()->implode('name', ', ') }}
                                        @else

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('delete-proposal', $proposal->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-proposal', $proposal->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                    </td>
                                </tr>

                                @empty
                                    <h1>Não existem propostas no sistema</h1>
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