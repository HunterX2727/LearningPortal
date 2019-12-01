<?php

namespace App;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{
    use Notifiable;

        protected $guard='teacher';
        protected $table='teachers';
        protected $primaryKey='User_Id';
        protected $fillable= [

            'Qualifications','Brief_Intro',

        ];

    


    public function Courses(){
        
        return $this->hasMany('App\Course');

    }
    public function User(){

        return $this->belongsTo('App\User');
    }
}
