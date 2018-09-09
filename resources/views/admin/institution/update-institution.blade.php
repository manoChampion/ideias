@extends('layouts.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Criar</strong> Instituição
            </div>
            <div class="card-body card-block">
                <form action="{{ route('update-institution', $institution->id) }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class="form-control-label">Nome</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" value="{{ $institution->name }}" name="name" id="name" placeholder="USP - Universidade de São Paulo" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="description" class=" form-control-label">Descrição</label></div>
                        <div class="col-12 col-md-9">
                            <textarea name="description" id="description" rows="3" placeholder="Algo sobre a USP" class="form-control" required>{{ $institution->description }}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="phone" class=" form-control-label">Telefone</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" value="{{ $institution->phone }}" name="phone" id="nphoneme" placeholder="+55 53 99954-5869" class="form-control mask-phone" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="address" class=" form-control-label">CEP</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" value="{{ $institution->address }}" name="address" id="address" placeholder="96400-100" class="form-control zipcode-mask" required>
                        </div>
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