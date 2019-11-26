<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }


    
    public function showTeacherLoginForm(){

        return view('auth.login',['url'=>'teacher']);
    }


    public function teacherLogin(Request $request){

        $this-> validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if  (Auth::guard('teacher')->attempt(['email' => $request->email,'password' => $request->password],$request->get('remember'))){
            
            return redirect()->intended('\teacher');

        }

        return back()->withInput($request->only('email','remember'));


    }




    public function showStudentLoginForm(){

        return view('auth.login',['url'=>'student']);
    }



    public function studentLogin(Request $request){

        $this-> validate($request, [

            'email' => 'required|email',
            "password" => 'required|min:8',
        ]);
        if (Auth::guard('student')->attempt(['email'=> $request->email,'password'=> $request->password],$request->get('remeber'))){

            return redirect()->intended('\student');
        }

        return back()->withInput($request->only('email','password'));
    }
   
   
}
