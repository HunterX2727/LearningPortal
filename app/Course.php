<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';    

    public function Teacher(){

        return $this->belongsTo(Teacher::class);

    }
    public function Enrollments(){

        return $this->hasMany(Enrollment::class);

    }
    public function CourseChapters(){

        return $this->hasMany(CourseChapter::class);

    }
    Public function Language(){

        return $this->belongsTo(Language::class);

    }
}
