<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\TypePost;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('admin.posts.post.view-posts', [
            'title' => 'Publicações',
            'path'  => 'Publicações / Todas as publicações'
        ])->with('posts', $posts);
    }

    public function create(Request $request) {
        $types = TypePost::all();

        return view('admin.posts.post.create-post', [
            'title' => 'Publicações',
            'path'  => 'Publicações / Criar Publicação',
            'types' => $types,
            
        ]);
    }
}
