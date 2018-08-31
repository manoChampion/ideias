<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'label'];
    public $timestamps = true;
    
    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function rolesToString($id_permission) {

        $roles = Permission::find($id_permission)->roles()->get();
        $string = [];

        foreach ($roles as $role) {
            array_push($string, $role->name);
        }

        $string = implode(', ', $string);

        return $string;
    }
}
