<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/panel',function(){
    return view('admin.panel');
});
Route::get('/teacherlogin',function(){
    return view('teacher.teacherlogin');
});
Route::get('/studentlogin',function(){
    return view('student.studentlogin');
});
