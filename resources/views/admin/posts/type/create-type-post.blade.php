@extends('layouts.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-type-post') }}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="title" class=" form-control-label">Título:</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="title" name="title" placeholder="Ex.: Ideia" class="form-control" required><small class="form-text text-muted">Use palavras em inglês separadas por virgulas</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="label" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="label" id="label" rows="3" placeholder="Ex.: Post que contém uma proposta rasa." class="form-control" required></textarea></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Criar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection