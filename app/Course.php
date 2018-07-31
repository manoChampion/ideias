<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function field() {
        return $this->belongsTo(Field::class);
    }

    public function proposals() {
        return $this->belongsToMany(Proposal::class);
    }
}
