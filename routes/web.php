<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('userLogin');
Route::POST('/logout', 'Auth\LoginController@logout')->name('logout');
//Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm')->name('studentLogin');
Route::get('/register/teacher', 'Auth\RegisterController@showTeacherRegisterForm')->name('teacherRegister');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm')->name('studentRegister');

Route::post('/login/teacher', 'Auth\LoginController@userLogin');
Route::post('/login/student', 'Auth\LoginController@usertLogin');
Route::post('/register/teacher', 'Auth\RegisterController@teacherRegister');
Route::post('/register/student', 'Auth\RegisterController@studentRegister');





Route::get('/teacher', 'TeacherController@index')->middleware('teacher');
Route::get('/student', 'StudentController@index')->middleware('student');
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');


Route::resource('courses', 'CourseController');




