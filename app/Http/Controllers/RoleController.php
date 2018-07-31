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

        return view('admin.acl.role.view-roles', [
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
            $role->permission()->attach($request->get('permissions-role'));
            $role->save();

            return redirect()->route('view-roles');
        }

        return view('admin.acl.role.create-role', [
            'title' => 'Criar',
            'path'  => 'Controle de Acesso / Roles'
        ])->with('permissions', $permissions);
    }

    public function update($role_id, Request $request) {
        $permissions = Permission::all();
        $role = Role::find($role_id);

        if ($request->get('name-role')) {

            $role->name = $request->get('name-role');
            $role->label = $request->get('label-role');
            $role->permissions()->sync($request->get('permissions-role'));
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
