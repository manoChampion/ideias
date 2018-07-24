<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $roles = Role::all();

        return view('admin.view-roles', [
            'title' => 'Cargos',
            'path'  => 'Controle de Acesso / Roles'
        ])->with('roles', $roles);
    }

    public function create(Request $request) {

        $permissions = Permission::all();

        if ($request->get('name-role')) {
            $role = new Role();

            $role->name = $request->get('name-role');
            $role->label = $request->get('label-role');
            $role->save();

            foreach ($request->get('permissions-role') as $id_permission) {
                $permission = Permission::find($id_permission);
                $role->permissions()->save($permission);
            }

            return redirect()->route('view-roles');
        }

        return view('admin.create-role', [
            'title' => 'Criar',
            'path'  => 'Controle de Acesso / Roles'
        ])->with('permissions', $permissions);
    }

    public function update() {

    }

    public function delete($role_id) {
        $role = Role::find($role_id);

        $role->delete();

        return redirect()->route('view-roles');
    }
}
