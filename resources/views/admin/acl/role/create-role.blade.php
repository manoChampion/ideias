@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-role') }}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class=" form-control-label">Título do Cargo</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Ex.: Administrador" class="form-control" required><small class="form-text text-muted">Use apenas uma palavra, se caso for necessário utilizar mais separe com '-' (hífen)</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="label" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="label" id="label" rows="3" placeholder="Ex.: Administra as páginas do projeto" class="form-control" required></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="permissions" class=" form-control-label">Permissões</label></div>
                        <div class="col col-md-9">
                            <select name="permissions[]" id="permissions" multiple class="form-control" required>
                                @forelse($permissions as $permission)
                                    <option value="{{ $permission->id }}" >{{ $permission->name }} ( {{ $permission->label }} )</option>

                                    @empty
                                    <option value="" readonly>Não existem permissões</option>

                                    @endforelse
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Criar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection