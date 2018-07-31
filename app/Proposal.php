<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function coursesToString($proposal_id) {
        $courses = Proposal::find($proposal_id)->courses()->get();
    }
}
