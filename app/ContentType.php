<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    protected $table = 'content_types'; 
    public function CourseChapterContents(){

        return $this->hasMany('App\CourseChapterContent');

    }
}
