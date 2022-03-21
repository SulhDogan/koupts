@extends('teacher.layout')
@section('content')
<div class="card">
  <div class="card-header">Öğretmen Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('teacher') }}" method="post">
        @csrf
        <label>Sicil Numarası</label></br>
        <input type="text" name="TeacherRegistrationNumber" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherRegistrationNumber'){{$message}} @enderror</span> </br>
        <label>İsim</label></br>
        <input type="text" name="TeacherName" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherName'){{$message}} @enderror</span> </br>
        <label>Soyisim</label></br>
        <input type="text" name="TeacherSurname" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherSurname'){{$message}} @enderror</span> </br>
        <label>Şifre</label></br>
        <input type="password" name="TeacherPassword" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherPassword'){{$message}} @enderror</span> </br>
        <label>Ünvan</label></br>
        <input type="text" name="TeacherDegree" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherDegree'){{$message}} @enderror</span> </br>
        <label>E-posta</label></br>
        <input type="text" name="TeacherEmail" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherEmail'){{$message}} @enderror</span> </br>
        <label>Bölüm</label></br>
        <select class="form-select" name="Teacher_DepartmentID">
        
        @foreach($departments as $key)
        <option value="{{$key->DepartmentID}}">{{$key->DepartmentName}}

        </option>

        @endforeach
          </select> </br>
          
        <input type="submit" value="Kaydet" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop