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


Route::get('/login/teacher', 'Auth\LoginController@showTeacherLoginForm')->name('teacherLogin');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm')->name('studentLogin');
Route::get('/register/teacher', 'Auth\RegisterController@showTeacherRegisterForm')->name('teacherRegister');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm')->name('studentRegister');

Route::post('/login/teacher', 'Auth\LoginController@teacherLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/register/teacher', 'Auth\RegisterController@teacherRegister');
Route::post('/register/student', 'Auth\RegisterController@studentRegister');





Route::get('/teacher', 'TeacherController@index');
Route::get('/student', 'StudentController@index');
Route::get('/home', 'HomeController@index')->middleware('auth');
