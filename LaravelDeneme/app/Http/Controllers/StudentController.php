<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Support\File;
class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students=Student::with('department')->get();
        return view ('student.index')->with('students',$students);
    }
    public function create()
    {
        $departments=Department::all();
        return view('student.create')->with('departments',$departments);
    }
    public function store(Request $request)
    {
        /*$request->validate(
            [
                
            ]
        );*/
        $input=new Student();
        $requestData=$request->all();
        $input->StudentNumber=$request->StudentNumber;
        $input->StudentPassword=$request->StudentPassword;
        $input->StudentName=$request->StudentName;
        $input->StudentSurname=$request->StudentSurname;
        $input->Student_DepartmentID=$request->Student_DepartmentID;
        $input->StudentClass=$request->StudentClass;
        $path=$request->file('picture')->storeAs('images', $request->StudentNumber, 'public');
        $input["StudentPhoto"]='/storage/'.$path;
        //$request->file('picture')->storeAs('public/images/',$request->StudentNumber.".jpg");
        //$input->StudentPhoto=$request->StudentNumber;
        $input->StudentPhone=$request->StudentPhone;
        $input->StudentEMail=$request->StudentEMail;
        $input->save();
        return redirect('student')->with('flash message','Öğrenci Eklendi');
    }
    public function show($id)
    {
        $student=Student::find($id);
        return view('student.show')->with('student',$student);
    }
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message','Öğrenci Silindi');
    }
    public function edit($id)
    {
        $students=Student::find($id);
        $departments=Department::all();
        return view('student.edit')->with('students',$students)->with('departments',$departments);
    }
}
