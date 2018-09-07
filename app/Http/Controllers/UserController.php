<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {

        // Rejeita Usuário Logado
        $users = User::all()->reject(function ($user) {
            return $user->id == $user->id;
        });
        $roles = Role::all();

        return view('admin.acl.user.view-users', [
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
            $user->password = Hash::make($request->get('password-user'));
            $user->save();
            $user->roles()->attach($request->get('role-user'));
            $user->save();

            return redirect()->route('view-users');
        }
        
        return view('admin.acl.user.create-user', [
            'title' => 'Adicionar Usuário',
            'path'  => 'Controle de Acesso / Usuários / Adicionar Usuário'
        ])->with('roles', $roles);

    }

    public function update($user_id, Request $request) {

        $roles = Role::all();
        $user = User::find($user_id);

        if ($request->get('name-user')) {
            $user = User::find($user_id);

            $user->username = $request->get('name-user');
            $user->email = $request->get('email-user');
            $user->birth = $request->get('birth-user');
            $user->password = $request->get('password-user');
            $user->save();
            $user->roles()->sync($request->get('role-user'));
            $user->save();

            return redirect()->route('view-users');
        }


        return view('admin.acl.user.update-user', [
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
