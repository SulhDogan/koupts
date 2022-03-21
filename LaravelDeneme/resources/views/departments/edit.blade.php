@extends('departments.layout')
@section('content')
<div class="card">
  <div class="card-header">Bölüm Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('department/' .$departments->DepartmentID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="DepartmentID" id="id" value="{{$departments->DepartmentID}}" id="id" />
        <label>Fakülte İsmi</label></br>
        <input type="text" name="DepartmentName" id="name" value="{{$departments->DepartmentName}}" class="form-control"></br>
        <span class="text-danger">@error('DepartmentName'){{$message}} @enderror</span> </br>
        <select class="form-select" name="Department_FacultyID">
          <option selected value="{{$departments->faculty->FacultyID}}">{{$departments->faculty->FacultyName}}</option>
        @foreach($facultys as $key)
        <option value="{{$key->FacultyID}}">{{$key->FacultyName}}

        </option>

        @endforeach
          </select> </br>
        <input type="submit" value="Güncelle" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop