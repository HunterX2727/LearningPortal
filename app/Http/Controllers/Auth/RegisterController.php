<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Teacher;
use App\Student;
use App\User;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:teacher');
        $this->middleware('guest:student');
    }


    public function showTeacherRegisterForm(){

        return view('auth.teacher_register', ['url' => 'teacher']);
    }

    public function showStudentRegisterForm(){

        return view('auth.student_register', ['url' => 'student']);
    }

    public function teacherRegister(Request $request){
        
        $this->validate($request, [
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'Qualifications' => 'required',
            'Brief_Intro' => 'required',
            'password' => 'required',
        ]);
        $user = User::create([

            'First_Name' => $request['First_Name'],
            'Last_Name' => $request['Last_Name'],
            'user_name' => $request['user_name'],
            'email' => $request['email'],
            'password' =>Hash::make($request['password']),
        ]);
        
        
        if ($user->id){
        $teacher = new Teacher;
            $teacher->User()->associate($user);
            $teacher->Qualifications  = $request->get('Qualifications');
            $teacher->Brief_Intro = $request->get('Brief_Intro');
            $teacher->save();
        
        }
      
        

        return redirect()->intended('login\teacher');
    }

    public function studentRegister(Request $request){
        
        $this->validate($request, [
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $user = User::create([

            'First_Name' => $request['First_Name'],
            'Last_Name' => $request['Last_Name'],
            'user_name' => $request['user_name'],
            'email' => $request['email'],
            'password' =>Hash::make($request['password']),
        ]);

        if ($user->id){
            $student = new Student;
                $student->User()->associate($user);
                $student->save();
        }
        

        return redirect()->intended('login\student');
        }



  

}
