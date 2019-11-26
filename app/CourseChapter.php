<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseChapter extends Model
{
    protected $table = 'course_chapters';
    public function Course(){

        return $this->belongsTo('App\Course');

    }
    public function CourseChapterContents(){

        return $this->hasMany('App\CourseChapterContent');

    }
}
