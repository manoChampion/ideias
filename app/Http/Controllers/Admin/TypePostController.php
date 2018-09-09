<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TypePost;

class TypePostController extends Controller
{
    public function index() {
        $types = TypePost::all();

        return view('admin.posts.type.view-type-post', [
            'title' => 'Tipos de Publicação',
            'path'  => 'Publicações / Tipos de Publicação',
        ])->with('types', $types);
    }

    public function create(Request $request) {

        if ($request->get('title')) {
            
            $type = new TypePost();
            $type->title = $request->get('title');
            $type->label = $request->get('label');
            $type->save();

            return redirect()->route('view-type-post');
        }

        return view('admin.posts.type.create-type-post', [
            'title' => 'Tipos de Publicação',
            'path'  => 'Publicações / Tipos de Publicação',
        ]);
    }

    public function update($type_id, Request $request) {
        $type = TypePost::find($type_id);

        if ($request->get('title')) {
            $type->title = $request->get('title');
            $type->label = $request->get('label');
            $type->save();

            return redirect()->route('view-type-post');
        }

        return view('admin.posts.type.update-type-post', [
            'title' => 'Tipos de Publicação',
            'path'  => 'Publicações / Tipos de Publicação',
        ])->with('type', $type);
    }

    public function delete($type_id) {
        $type = TypePost::find($type_id);
        $type->delete();

        return redirect()->route('view-type-post'); 
    }

}
