<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content', 'type_id', 'user_id'];
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function users_like() {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function type() {
        return $this->belongsTo(TypePost::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function coursesToString() {

        $courses = $this->courses()->get();
        $string = [];

        foreach ($courses as $course) {
            array_push($string, $course->name);
        }

        $string = implode(', ', $string);

        return $string;
    }

    public function hasCourse($course_id) {
        $courses = $this->courses;

        if($courses->contains(Course::find($course_id))) {
            return true;
        }

        return false;
    }
}
