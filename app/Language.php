<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    public function Courses(){


        return $this->hasMany('App\Courses');

    }
}
