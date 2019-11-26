<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    public function Enrollment(){

        return $this->belongsTo('App\Enrollment');

    }
}
