<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseChapter extends Model
{
    protected $table = 'course_chapters';
    public function Course(){

        return $this->belongsTo(Course::class);

    }
    public function CourseChapterContents(){

        return $this->hasMany(CourseChapterContent::class);

    }
}
