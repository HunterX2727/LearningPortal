<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningProgress extends Model
{
    protected $table = 'learning_progresses';
    public function Enrollment(){

        return $this->belongsTo(Enrollment::class);

    }
    public function CourseChapterContent(){

        return $this->belongsTo(CourseChapterContent::class);

    }
}
