<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Illuminate\Http\Response;

class PermissionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $permissions = Permission::all();

        return view('admin.view-permissions', [
            'title' => 'Permissões',
            'path'  => 'Controle de Acesso / Permissões'
        ])->with('permissions', $permissions);
    }

    public function create(Request $request) {

        if  ($request->get('name-permission')) {
            $permission = new Permission();
            $permission->name = $request->get('name-permission');
            $permission->label = $request->get('label-permission');

            $permission->save();

            return redirect()->route('view-permissions');
        }
        

        return view('admin.create-permission', [
            'title' => 'Criar',
            'path'  => 'Controle de Acesso / Permissões / Criar'
        ]);
    }

    public function update() {

    }

    public function delete($permission_id) {
        $permission = Permission::find($permission_id);

        $permission->delete();
        return redirect()->route('view-permissions');
    }
}
