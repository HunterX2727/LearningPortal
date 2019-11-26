<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseChapterContent extends Model
{
    protected $table = 'course_chapter_contents';
    
    public function CourseChapter(){

        return $this->belongsTo('App\CourseChapter');

    }
    public function ContentType(){

        return $this->belongsTo('App\ContentType');

    }
    public function LearningProgresses(){

        return $this->belongsTo('App\LearningProgress');

    }
}
