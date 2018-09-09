@extends('layouts.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Criar</strong> Post
            </div>
            <div class="card-body card-block">
                <form action="{{ route('update-post', $post->id) }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="content" class=" form-control-label">Conteúdo do Post</label></div>
                    <div class="col-12 col-md-9"><textarea name="content" id="content" rows="3" placeholder="Ex.: Preciso de uma ajuda em PHP" class="form-control" required>{{ $post->content }}</textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="course" class=" form-control-label">Cursos</label></div>
                        <div class="col-12 col-md-9">
                            <select name="course[]" class="form-control" multiple>
                                @forelse($courses as $course)
                                    <option value="{{ $course->id }}" {{ $post->hasCourse($course->id) ? "selected" : "" }} >{{ $course->name }}</option>
                                @empty
                                    <option value="">Não existem cursos cadastrados no sistema.</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="type" class=" form-control-label">Tipo de Post</label></div>
                    <div class="col-12 col-md-9">
                        <select name="type" class="form-control">
                            @forelse($types as $type)
                        <option value="{{ $type->id }}" {{ $post->type_id == $type->id ? "selected" : "" }}>{{ $type->title }}</option>
                            @empty
                                <option value="">Não existem tipos de post cadastrados no sistema.</option>
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