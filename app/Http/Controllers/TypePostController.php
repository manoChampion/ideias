<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        if ($request->get('title-type')) {
            
            $type = new TypePost();
            $type->title = $request->get('title-type');
            $type->label = $request->get('label-type');
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

        if ($request->get('title-type')) {
            $type->title = $request->get('title-type');
            $type->label = $request->get('label-type');
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
