@extends('layouts.app')

@section('form-post')
    <div class="row">
        <div class="col-md-6 offset-md-3 publish-area">
            <form action="{{ route('teste') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Diga algo ao mundo!"></textarea>
                </div>
                <div class="options">
                    Idéia
                    <label class="switch switch-3d switch-warning mr-3"><input type="checkbox" name="type" value="1" class="switch-input"><span class="switch-label"></span> <span class="switch-handle"></span></label>
                    <button class="btn btn-success" type="submit">Publicar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('content')
    

   @forelse($posts as $post)
   <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">
                    {{ $post->user->username }}
                    @if($post->type_id == 1)
                        <small><span class="badge badge-warning float-right mt-1">IDEIA</span></small>
                    @endif
                </strong>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->content }}</p>
            </div>
        </div>
    </div>
    @empty 
    Não existem posts
    @endforelse

@endsection