@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Criar</strong> Área
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-field') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name-field" class=" form-control-label">Título Área:</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name-field" name="name-field" placeholder="Ex.: Exatas" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="description-field" class=" form-control-label">Breve descrição</label></div>
                        <div class="col-12 col-md-9"><textarea name="description-field" id="description-field" rows="3" placeholder="Ex.: Alguma coisa referente a área" class="form-control" required></textarea></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Criar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection