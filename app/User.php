<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'birth', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Retorna todas as instancias de role
     *
     * @return Objeto Role ou Array Role
     */
    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function rolesToString($user_id) {

        $roles  = User::find($user_id)->roles()->get();
        $string = [];

        foreach ($roles as $role) {
            array_push($string, $role->name);
        }

        return implode(', ', $string);

    }

    public function hasRole($role_id) {

        $help = false;

       $roles = User::roles()->get();

       foreach ($roles as $role) {
           if ($role->id == $role_id) {
               $help = true;
           } 
       }

       return $help;
    }

}
