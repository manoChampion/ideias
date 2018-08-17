<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function typePost() {
        return $this->belongsTo(TypePost::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function images() {
        return $this->belongsToMany(Image::class);
    }
}
