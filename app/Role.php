<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $fillable = ['name', 'label'];
    public $timestamps = true;

    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function permissionsToString($id_role) {

        $permissions = Role::find($id_role)->permissions()->get();
        $string = [];

        foreach ($permissions as $permission) {
            array_push($string, $permission->name);
        }

        $string = implode(', ', $string);

        return $string;
    }

    public function hasPermission($permission_id) {
        $permissions = Role::permissions()->get();
        $help = false;
        
        foreach ($permissions as $permission) {
            if ($permission->id == $permission_id) {
                $help = true;
            }
        }

        return $help;
    }
}
