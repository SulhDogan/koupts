<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Yajra\Datatables\DataTables;
use Illuminate\Support\Facades\Log;
use Session;
class FacultyController extends Controller
{
    public function registerFaculty(Request $request)
    {
        $request->validate([
            'FacultyName'=>'required|unique:facultys'
        ]);
        $faculty= new Faculty();
        $faculty->FacultyName=$request->FacultyName;
        $res=$faculty->save();
        if($res)
        {
            return back()->with('Başarılı','Fakülte Oluşturuldu');
        }
        else
        {
            return back()->with('Başarısız','Fakülte Oluşturulmadı');
        }
        
    }
    public function index(Request $request)
    {
        $faculties=Faculty::all();
        return view('faculty.index')->with('faculties',$faculties);
        
    }
    public function destroy(int $id)
    {
        Faculty::destroy($id);
        return redirect('faculty')->with('flash_message', 'Fakülte Silindi'); 
    }
    public function update(Request $request,$id)
    {  
        $request->validate([
            'FacultyName'=>'required|unique:facultys'
        ]);
        $faculties=Faculty::find($id);
        $input = $request->all();
        $faculties->update($input);
        return redirect('faculty')->with('flash_message', 'Fakülte Güncellendi');

    }
    public function create()
    {
        
        return view('faculty.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'FacultyName'=>'required|unique:facultys'
        ]);
        $input=$request->all();
        
        Faculty::create($input);
        return redirect('faculty')->with('flash_message','Fakülte Eklendi');
    }
    public function show($id)
    {
        $faculties=Faculty::find($id);
        return view('faculty.show')->with('faculties',$faculties);
    }
    public function edit($id)
    {
        $faculties=Faculty::find($id);
        
        return view('faculty.edit')->with('faculties',$faculties);
    }
}
