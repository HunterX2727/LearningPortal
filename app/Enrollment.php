<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    
    public function Student(){

        return $this->belongsTo(Student::class);

    }
    public function Course(){

        return $this->belongsTo(Course::class);

    }
    public function Feedbacks(){

        return $this->hasMany(Feedback::class);

    }
    public function LearningProgresses(){

        return $this->hasMany(LearningProgress::class);

    }
}
