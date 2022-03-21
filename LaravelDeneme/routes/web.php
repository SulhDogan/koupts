<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;

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
Route::get('/panellogin',[AdminController::class, 'login']);
Route::get('/panelreg',[AdminController::class,'register']);
Route::post('/panelregister-user',[AdminController::class,'registerUser'])->name('panelregister-user');
Route::post('/panellogin-user',[AdminController::class,'userlogin'])->name('panellogin-user');
Route::get('/panellogout',[AdminController::class,'adminlogout']);
Route::get('/teacherlogin',function(){
    return view('teacher.teacherlogin');
});
Route::get('/studentlogin',function(){
    return view('student.studentlogin');
});
//////
Route::get('/panel',[AdminController::class,'panel'])->middleware('adminisLoggedIn');
Route::post('/faculty-register',[FacultyController::class,'registerFaculty'])->name('faculty-register');
Route::resource('faculty',FacultyController::class)->middleware('adminisLoggedIn');
////
Route::resource('department',DepartmentController::class)->middleware('adminisLoggedIn');
////
Route::resource('period',PeriodController::class)->middleware('adminisLoggedIn');
////
Route::resource('teacher',TeacherController::class)->middleware('adminisLoggedIn');
///
Route::resource('student',StudentController::class)->middleware('adminisLoggedIn');



