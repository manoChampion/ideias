@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('create-course') }}" class="btn btn-primary" style="color: #FFF;">Criar Curso</a>
                            <hr>
                            <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Descrição</th>
                                <th>Área</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>
                                        @if($course->field())
                                        {{ $course->field->name }}
                                            @else
                                                Não existem áreas.
                                            @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('delete-course', $course->id) }}"><i class="fa fa-remove"></i> Remover</a>
                                        <a href="{{ route('update-course', $course->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                    </td>
                                </tr>

                                @empty
                                    <h1>Não existem cursos no sistema</h1>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>
@endsection