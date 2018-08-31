<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePost extends Model
{
    protected $table = 'types_post';

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
