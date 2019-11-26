<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';    

    public function Teacher(){

        return $this->belongsTo('App\Teacher');

    }
    public function Enrollments(){

        return $this->hasMany('App\Enrollment');

    }
    public function CourseChapters(){

        return $this->hasMany('App\CourseChapter');

    }
    Public function Language(){

        return $this->belongsTo('App\Language');

    }
}
