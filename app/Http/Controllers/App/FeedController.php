<?php

namespace App\Http\Controllers\App;

use App\Course;
use App\TypePost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Post;
use App\Events\PostPublished;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function index() {

        $posts = Post::all()->sortByDesc('created_at');

        return view('app.feed.index', [
            'title' => 'Feed',
            'posts' => $posts,
        ]);
    }



    // =================================================
    // MÉTODO REALTIME PUSHER
    // =================================================
    public function publishPost(Request $request) {
        event(new PostPublished(Auth::user(), $request->get('content')));
    }

    // =================================================
    // MÉTODO NORMAL
    // =================================================

    public function create(Request $request) {
        $types = TypePost::all();
        $courses = Course::all();

        if ($request->get('content')) {
            $post = Post::create([
                'content' => $request->get('content'), 
                'type_id' => $request->get('type') == "1" ? 1 : 0,
                'user_id' => Auth::user()->id,
            ]);
            
            // $post->courses()->attach($request->get('course'));
        }

        return redirect()->route('feed');;
    }
}
