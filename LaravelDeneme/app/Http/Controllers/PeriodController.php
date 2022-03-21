<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\period;
class PeriodController extends Controller
{
    public function index(Request $request)
    {
        $periods=period::all();
        return view('periods.index')->with('periods',$periods);
    }
    public function create()
    {
        return view('periods.create');
    }
    public function store(Request $request)
    {
        $input=$request->all();
        period::create($input);
        return redirect('period')->with('flash_message','Dönem Eklendi');
    }
    public function show($id)
    {
        $periods=period::find($id);
        return view('periods.show')->with('periods',$periods);
    }
    public function edit(Request $request,$id)
    {
        $periods=period::find($id);
        return view('periods.edit')->with('periods',$periods);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'PeriodName'=>'required|unique:periods'
        ]);
        $periods=period::find($id);
        $input=[
            'PeriodName'=>$request->PeriodName
        ];
        $periods->update($input);
        return redirect('period')->with('flash_message','Dönem Güncellendi');
    }
    public function destroy($id)
    {
        period::destroy($id);
        return redirect('period')->with('flash_message','Dönem Silindi');
    }
}
