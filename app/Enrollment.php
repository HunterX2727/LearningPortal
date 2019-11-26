<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    
    public function Student(){

        return $this->belongsTo('App\Student');

    }
    public function Course(){

        return $this->belongsTo('App\Course');

    }
    public function Feedbacks(){

        return $this->hasMany('App\Feedback');

    }
    public function LearningProgresses(){

        return $this->hasMany('App\LearningProgress');

    }
}
