@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('update-field', $field->id) }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class=" form-control-label">Título da Área</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="{{ $field->name }}" placeholder="Ex.: Exatas" class="form-control" required><small class="form-text text-muted">Use apenas uma palavra, se caso for necessário utilizar mais separe com '-' (hífen)</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="description" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="description" rows="3" placeholder="Ex.: Alguma coisa sobre a área" class="form-control" required>{{ $field->description }}</textarea></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection