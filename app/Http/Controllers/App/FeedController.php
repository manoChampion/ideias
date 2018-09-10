<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedController extends Controller
{
    public function index() {

        return view('app.feed.index', [
            'title' => 'Feed'
        ]);

    }
}
