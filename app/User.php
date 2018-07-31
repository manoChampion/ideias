<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'birth', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proposals() {
        return $this->hasMany(Proposal::class);
    }

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
