@extends('faculty.layout')
@section('content')
<div class="card">
  <div class="card-header">Fakülte Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('faculty/' .$faculties->FacultyID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="FacultyID" id="id" value="{{$faculties->FacultyID}}" id="id" />
        <label>Fakülte İsmi</label></br>
        <input type="text" name="FacultyName" id="name" value="{{$faculties->FacultyName}}" class="form-control"></br>
        <span class="text-danger">@error('FacultyName'){{$message}} @enderror</span> </br>
        <input type="submit" value="Güncelle" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
