<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'birth',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function posts_like() {
        return $this->belongsToMany(Post::class, 'likes');
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

    public function hasPermission(Permission $permission) {    

        return $this->hasAnyRoles($permission->roles);

    }

    public function hasAnyRoles($roles) {

        if (is_array($roles) || is_object($roles)) {
            return !! $roles->intersect($this->roles)->count();
        }

        return $this->roles->contains('name', $roles);
    }
}
