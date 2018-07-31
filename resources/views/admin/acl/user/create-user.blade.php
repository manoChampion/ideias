@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Formulário</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-user') }}" method="post" id="formulario" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name-user" class="form-control-label">Nome</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="name-user" class="form-control" placeholder="Aderson Alves da Silva" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-user" class=" form-control-label">E-mail</label></div>
                        <div class="col-12 col-md-9"><input type="email" name="email-user" class="form-control" placeholder="adersongme@gmail.com" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="birth-user" class=" form-control-label">Data de Nascimento</label></div>
                        <div class="col-12 col-md-9"><input type="date" class="form-control" name="birth-user" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="password-user" class=" form-control-label">Senha</label></div>
                        <div class="col-12 col-md-9"><input type="password" class="form-control" placeholder="****************" name="password-user" required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="role-user" class="form-control-label">Cargos</label></div>
                        <div class="col-12 col-md-9">
                            <select name="role-user[]" id="role-user" class="form-control" multiple>
                                @forelse ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @empty
                                    <option value="0">Sem cargo</option>
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