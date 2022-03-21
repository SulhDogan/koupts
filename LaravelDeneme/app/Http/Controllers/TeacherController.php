<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Teacher;
class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers=Teacher::with("department")->get();
        return view('teacher.index')->with('teachers',$teachers);
    }
    public function create()
    {
        $departments=Department::all();
        return view('teacher.create')->with('departments',$departments);
    }
    public function store(Request $request)
    {
        $request->validate([
            'TeacherRegistrationNumber'=>'required|unique:teachers',
            'TeacherName'=>'required',
            'TeacherSurname'=>'required',
        ]);
        $input=new Teacher();
        $input->TeacherRegistrationNumber=$request->TeacherRegistrationNumber;
        $input->TeacherName=$request->TeacherName;
        $input->TeacherSurname=$request->TeacherSurname;
        $input->TeacherPassword=$request->TeacherPassword;
        $input->TeacherDegree=$request->TeacherDegree;
        $input->TeacherEmail=$request->TeacherEmail;
        $input->Teacher_DepartmentID=$request->Teacher_DepartmentID;
        $input->save();
        return redirect('teacher')->with('flash_message','Öğretmen Eklendi');
    }
    public function show($id)
    {
        $teacher=Teacher::find($id);
        return view('teacher.show')->with('teacher',$teacher);
    }
    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message','Öğretmen Silindi');
    }
    public function update(Request $request,$id)
    {
        $teacher=Teacher::find($id);
        $input=[
            'TeacherRegistrationNumber'=>$request->TeacherRegistrationNumber,
            'TeacherName'=>$request->TeacherName,
            'TeacherSurname'=>$request->TeacherSurname,
            'TeacherPassword'=>$request->TeacherPassword,
            'TeacherDegree'=>$request->TeacherDegree,
            'TeacherEmail'=>$request->TeacherEmail,
            'Teacher_DepartmentID'=>$request->Teacher_DepartmentID
        ];
        $teacher->update($input);
        return redirect('teacher')->with('flash_message','Öğretmen Güncellendi');
    }
    public function edit($id)
    {
        $teachers=Teacher::find($id);
        $departments=Department::all();
        return view('teacher.edit')->with('teachers',$teachers)->with('departments',$departments);
    }
}
