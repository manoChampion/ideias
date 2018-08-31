<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['name', 'description', 'image', 'field_id'];

    public function field() {
        return $this->belongsTo(Field::class);
    }

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
