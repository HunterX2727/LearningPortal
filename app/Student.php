<?php

namespace App;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    protected $guard= 'student';
    protected $table = 'students';
    protected $primaryKey='User_Id';
    public function Enrollments(){

        return $this->hasMany('App\Enrollment');

    }
    public function User(){

        return $this->belongsTo('App/User');
    }
}
