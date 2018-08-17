<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePost extends Model
{
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
