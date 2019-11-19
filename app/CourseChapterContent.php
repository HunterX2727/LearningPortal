<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseChapterContent extends Model
{
    protected $table = 'course_chapter_contents';
    
    public function CourseChapter(){

        return $this->belongsTo(CourseChapter::class);

    }
    public function ContentType(){

        return $this->belongsTo(ContentType::class);

    }
    public function LearningProgresses(){

        return $this->belongsTo(LearningProgress::class);

    }
}
