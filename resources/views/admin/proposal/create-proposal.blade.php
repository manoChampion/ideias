@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <div class="card-body card-block">
                <form action="{{ route('create-proposal') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="description-proposal" class=" form-control-label">Proposta: </label></div>
                        <div class="col-12 col-md-9"><textarea name="description-proposal" id="description-proposal" rows="3" placeholder="Ex.: Preciso de um APP que calcúle minhas finanças" class="form-control" required></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="courses-proposal" class=" form-control-label">Cursos Relacionados: </label></div>
                        <div class="col col-md-9">
                            <select name="courses-proposal[]" id="courses-proposal" multiple class="form-control" required>
                                @forelse($courses as $course)
                                    <option value="{{ $course->id }}" >{{ $course->name }} ( {{ $course->description }} )</option>

                                    @empty
                                    <option value="" readonly>Não existem cursos</option>

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