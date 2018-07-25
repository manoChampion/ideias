@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Formulário</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('update-user', $user->id) }}" method="post" id="formulario" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="username-user" class="form-control-label">Nome</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="username-user" value="{{ $user->username }}" class="form-control" placeholder="Aderson Alves da Silva" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-user" class=" form-control-label">E-mail</label></div>
                        <div class="col-12 col-md-9"><input type="email" value="{{ $user->email }}" name="email-user" class="form-control" placeholder="adersongme@gmail.com" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="birth-user" class=" form-control-label">Data de Nascimento</label></div>
                        <div class="col-12 col-md-9"><input type="date" value="{{ $user->birth }}" class="form-control" name="birth-user" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="password-user" class=" form-control-label">Senha</label></div>
                        <div class="col-12 col-md-9"><input type="password" class="form-control" placeholder="****************" value="{{ $user->password }}" name="password-user" required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="role-user" class="form-control-label">Cargos</label></div>
                        <div class="col-12 col-md-9">
                            <select name="role-user[]" id="role-user" class="form-control" multiple>
                                @forelse ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->hasRole($role->id) ? "selected" : "" }}>{{ $role->name }}</option>
                                @empty
                                    <option>Sem cargos disponíveis no sistema </option>
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