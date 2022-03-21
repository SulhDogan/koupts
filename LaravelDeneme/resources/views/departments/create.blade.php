@extends('departments.layout')
@section('content')
<div class="card">
  <div class="card-header">Bölüm Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('department') }}" method="post">
        @csrf
        <label>Bölüm İsmi</label></br>
        <input type="text" name="DepartmentName" id="name" class="form-control"></br>
        <span class="text-danger">@error('DepartmentName'){{$message}} @enderror</span> </br>
        <select class="form-select" name="Department_FacultyID">
        
        @foreach($facultys as $key)
        <option value="{{$key->FacultyID}}">{{$key->FacultyName}}

        </option>

        @endforeach
          </select> </br>
          
        <input type="submit" value="Kaydet" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop