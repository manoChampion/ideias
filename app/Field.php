<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['name', 'description', 'image'];
    
    public $timestamps = false;

    public function courses() {
        return $this->hasMany(Course::class); 
    }
}
