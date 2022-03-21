@extends('faculty.layout')
@section('content')
<div class="card">
  <div class="card-header">Fakülte Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('faculty') }}" method="post">
        {!! csrf_field() !!}
        <label>Fakülte İsmi</label></br>
        <input type="text" name="FacultyName" id="name" class="form-control"></br>
        <span class="text-danger">@error('FacultyName'){{$message}} @enderror</span> </br>
        <input type="submit" value="Kaydet" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
