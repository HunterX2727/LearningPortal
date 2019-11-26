<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningProgress extends Model
{
    protected $table = 'learning_progresses';
    public function Enrollment(){

        return $this->belongsTo('App\Enrollment');

    }
    public function CourseChapterContent(){

        return $this->belongsTo('App\CourseChapterContent');

    }
}
