@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Criar</strong> Post
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-post') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="content-post" class=" form-control-label">Conteúdo do Post</label></div>
                        <div class="col-12 col-md-9"><textarea name="content-post" id="content-post" rows="3" placeholder="Ex.: Preciso de uma ajuda em PHP" class="form-control" required></textarea></div>
                    </div>
                    <div class="row form-group">
                            <div class="col col-md-3"><label for="course-post" class=" form-control-label">Cursos</label></div>
                        <div class="col-12 col-md-9">
                            <select name="course-post[]" class="form-control" multiple>
                                @forelse($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @empty
                                    <option value="">Não existem cursos cadastrados no sistema.</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="type-post" class=" form-control-label">Tipo de Post</label></div>
                    <div class="col-12 col-md-9">
                        <select name="type-post" class="form-control">
                            @forelse($types as $type)
                                <option value="{{ $type->id }}">{{ $type->title }}</option>
                            @empty
                                <option value="">Não existem tipos de post cadastrados no sistema.</option>
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