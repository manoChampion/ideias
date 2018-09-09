<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        return view('admin.acl.role.view-roles', [
            'title' => 'Cargos',
            'path'  => 'Controle de Acesso / Roles'
        ])->with('roles', $roles);
    }

    public function create(Request $request) {

        $permissions = Permission::all();

        if ($request->get('name')) {
            $role = new Role();

            $role->name = $request->get('name');
            $role->label = $request->get('label');
            $role->save();
            $role->permissions()->attach($request->get('permissions'));
            $role->save();

            return redirect()->route('view-roles');
        }

        return view('admin.acl.role.create-role', [
            'title' => 'Criar',
            'path'  => 'Controle de Acesso / Roles',
            'permissions' => $permissions,
        ]);   
    }

    public function update($role_id, Request $request) {
        $permissions = Permission::all();
        $role = Role::find($role_id);

        if ($request->get('name')) {

            $role->name = $request->get('name');
            $role->label = $request->get('label');
            $role->permissions()->sync($request->get('permissions'));
            $role->save();

            return redirect()->route('view-roles');
        }


        return view('admin.acl.role.update-role', [
            'title' => 'Editar Cargo',
            'path'  => 'Controle de Acesso / Cargos / Editar Cargo'
        ])->with([
            'role'        => $role,
            'permissions' => $permissions,
        ]);
    }

    public function delete($role_id) {
        $role = Role::find($role_id);

        $role->delete();

        return redirect()->route('view-roles');
    }
}
