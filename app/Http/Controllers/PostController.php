<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\TypePost;
use App\Course;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('admin.posts.post.view-posts', [
            'title' => 'Publicações',
            'path'  => 'Publicações / Todas as publicações',
            'posts' => $posts,    
        ]);
    }

    public function create(Request $request) {
        $types = TypePost::all();
        $courses = Course::all();

        if ($request->get('content')) {
            $post = Post::create([
                'content' => $request->get('content'), 
                'type_id' => $request->get('type'),
                'user_id' => $request->user()->id,
            ]);
            
            $post->courses()->attach($request->get('course'));

            return redirect()->route('view-posts');
        }


        return view('admin.posts.post.create-post', [
            'title' => 'Publicações',
            'path'  => 'Publicações / Criar Publicação',
            'types' => $types,
            'courses' => $courses,
            
        ]);
    }

    public function update($post_id, Request $request) {
        $types = TypePost::all();
        $courses = Course::all();
        $post = Post::find($post_id);

        if ($request->get('content')) {
            $post = Post::find($post_id);

            $post->content = $request->get('content');
            $post->type_id = $request->get('type');
            $post->courses()->sync($request->get('course'));

            $post->save();

            return redirect()->route('view-posts');
        }


        return view('admin.posts.post.update-post', [
            'title' => 'Publicações',
            'path'  => 'Publicações / Criar Publicação',
            'types' => $types,
            'courses' => $courses,
            'post'   => $post,
            
        ]);
    }

    public function delete($post_id) {
        $post = Post::find($post_id);

        $post->delete();
        return redirect()->route('view-posts');
    }
}
