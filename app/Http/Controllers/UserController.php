<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        $roles = Role::all();

        return view('admin.view-users', [
            'title' => 'Usuários',
            'path'  => 'Controle de Acesso / Usuários'
        ])->with([
            'users' => $users,
            'roles' => $roles,
        ]);
    }

    public function create(Request $request) {

        $roles = Role::all();

        
        if ($request->get('name-user')) {
            $user = new User();

            $user->username = $request->get('name-user');
            $user->email = $request->get('email-user');
            $user->birth = $request->get('birth-user');
            $user->password = $request->get('password-user');

            $user->save();

            foreach ($request->get('role-user') as $id_role) {
                $role = Role::find($id_role);
                $user->roles()->save($role);
            }
        }


        return view('admin.create-user', [
            'title' => 'Adicionar Usuário',
            'path'  => 'Controle de Acesso / Usuários / Adicionar Usuário'
        ])->with('roles', $roles);

    }

    public function update($user_id) {

        $roles = Role::all();
        $user = User::find($user_id);


        return view('admin.update-user', [
            'title' => 'Editar Usuário',
            'path'  => 'Controle de Acesso / Usuários / Editar Usuário'
        ])->with([
            'roles' => $roles,
            'user'  => $user,
        ]);
    }

    public function delete($user_id) {

        $user = User::find($user_id);

        $user->delete();

        return redirect()->route('view-users');

    }
}
