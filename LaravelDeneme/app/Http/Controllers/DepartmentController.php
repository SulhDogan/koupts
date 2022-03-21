<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
class DepartmentController extends Controller
{
    //
    public function index(Request $request)
    {
        $departments=Department::with("faculty")->get();
        
        /*foreach($departments as $key)
        {
            $data->DepartmentID=$key->DepartmentID;
            $data->DepartmentName=$key->DepartmentName;
            $data->Department_FacultyID=$key->Department_FacultyID;
            $data->Fname=DB::table('facultys')->select('FacultyName')->where('FacultyID',$key->Department_FacultyID)->get();
            return $data;
        }
        */
        
        /*$ids = $departments->map(function ($item) {
            return $item->Department_FacultyID;
        });
        $fname=$faculty->map(function ($item) {
            return $item->FacultyName;
        });
        return json_encode($fname);*/
        
        


         return view('departments.index')->with('departments',$departments);
        
    }
    public function create()
    {
        $facultys=Faculty::all();
        return view('departments.create')->with('facultys',$facultys);
    }
    public function store(Request $request)
    {
        $request->validate([
            'DepartmentName'=>'required|unique:departments'
        ]);
        $input=new Department();
        $input->DepartmentName=$request->DepartmentName;
        $input->Department_FacultyID=$request->Department_FacultyID;
        $input->save();
        return redirect('department')->with('flash_message','Bölüm Eklendi');
    }
    public function show($id)
    {
        $departments=Department::find($id);
        return view('departments.show')->with('departments',$departments);

    }
    public function edit($id)
    {
        $departments=Department::find($id);
        $facultys=Faculty::all();
        return view('departments.edit')->with('departments',$departments)->with('facultys',$facultys);
    }
    public function update(Request $request,$id)
    {
        $departments=Department::find($id);
        $input=[
            'DepartmentName'=>$request->DepartmentName,
            'Department_FacultyID'=>$request->Department_FacultyID,
        ];
        $departments->update($input);
        return redirect('department')->with('flash_message','Bölüm Güncellendi');
    }
    public function destroy(int $id)
    {
        Department::destroy($id);
        return redirect('department')->with('flash_message','Bölüm Silindi');

    }
}
