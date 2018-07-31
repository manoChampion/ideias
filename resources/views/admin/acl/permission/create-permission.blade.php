@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-permission') }}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name-permission" class=" form-control-label">Título Permissão:</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name-permission" name="name-permission" placeholder="Ex.: view-permissions" class="form-control" required><small class="form-text text-muted">Use palavras em inglês separadas por virgulas</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="label-permission" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="label-permission" id="label-permission" rows="3" placeholder="Ex.: Vizualizar as permissões" class="form-control" required></textarea></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Criar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection