<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Retorna todas as intancias de permission
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * @param $id_role
     */
    public function permissionsToString($id_role) {

        $permissions = Role::find($id_role)->permissions()->get();
        $string = [];

        foreach ($permissions as $permission) {
            array_push($string, $permission->name);
        }

        $string = implode(', ', $string);

        return $string;
    }
}
