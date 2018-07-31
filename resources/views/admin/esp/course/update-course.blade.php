@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('update-course', $course->id) }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name-course" class=" form-control-label">Título do Curso</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name-course" name="name-course" value="{{ $course->name }}" placeholder="Ex.: Direito" class="form-control" required><small class="form-text text-muted">Use apenas uma palavra, se caso for necessário utilizar mais separe com '-' (hífen)</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="description-course" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="description-course" id="description-course" rows="3" placeholder="Ex.: Alguma coisa sobre o curso" class="form-control" required>{{ $course->description }}</textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="field-course" class=" form-control-label">Área de Conhecimento</label></div>
                        <div class="col-12 col-md-9">
                            <select name="field-course" id="" class="form-control">
                                @forelse($fields as $field)
                                <option value="{{ $field->id }}" {{ $course->field->id == $field->id ? "selected" : "" }} >{{ $field->name }}</option>
                                @empty
                                <option value="">Não existem áreas cadastradas no sistema.</option>
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