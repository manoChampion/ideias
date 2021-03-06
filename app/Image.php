<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path', 'post_id'];
    public $timestamps = true;

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
