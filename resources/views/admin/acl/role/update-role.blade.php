@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('update-role', $role->id) }}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name-role" class=" form-control-label">Título do Cargo</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name-role" name="name-role" value="{{ $role->name }}" placeholder="Ex.: Administrador" class="form-control" required><small class="form-text text-muted">Use apenas uma palavra, se caso for necessário utilizar mais separe com '-' (hífen)</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="label-role" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="label-role" id="label-role" rows="3" placeholder="Ex.: Administra as páginas do projeto" class="form-control" required>{{ $role->label }}</textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="permissions-role" class=" form-control-label">Permissões</label></div>
                        <div class="col col-md-9">
                            <select name="permissions-role[]" id="permissions-role" multiple class="form-control">
                                @forelse($permissions as $permission)
                                    <option value="{{ $permission->id }}" {{ $role->hasPermission($permission->id) ? "selected" : "" }} >{{ $permission->name }} ( {{ $permission->label }} )</option>

                                    @empty
                                    <option value="" readonly>Não existem permissões</option>

                                    @endforelse
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection