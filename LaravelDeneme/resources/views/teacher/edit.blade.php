@extends('teacher.layout')
@section('content')
<div class="card">
  <div class="card-header">Öğretmen Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('teacher/' .$teachers->TeacherRegistrationNumber) }}" method="post">
      @csrf
      @method("PATCH")
        <label>Sicil Numarası</label></br>
        <input type="text" name="TeacherRegistrationNumber" id="name" value="{{$teachers->TeacherRegistrationNumber}}"class="form-control"></br>
        <span class="text-danger">@error('TeacherRegistrationNumber'){{$message}} @enderror</span> </br>
        <label>İsim</label></br>
        <input type="text" name="TeacherName" id="name" value="{{$teachers->TeacherName}}"class="form-control"></br>
        <span class="text-danger">@error('TeacherName'){{$message}} @enderror</span> </br>
        <label>Soyisim</label></br>
        <input type="text" name="TeacherSurname" id="name"value="{{$teachers->TeacherSurname}}" class="form-control"></br>
        <span class="text-danger">@error('TeacherSurname'){{$message}} @enderror</span> </br>
        <label>Şifre</label></br>
        <input type="password" name="TeacherPassword" id="name"value="{{$teachers->TeacherPassword}}" class="form-control"></br>
        <span class="text-danger">@error('TeacherPassword'){{$message}} @enderror</span> </br>
        <label>Ünvan</label></br>
        <input type="text" name="TeacherDegree" id="name"value="{{$teachers->TeacherDegree}}" class="form-control"></br>
        <span class="text-danger">@error('TeacherDegree'){{$message}} @enderror</span> </br>
        <label>E-posta</label></br>
        <input type="text" name="TeacherEmail" id="name"value="{{$teachers->TeacherEmail}}" class="form-control"></br>
        <span class="text-danger">@error('TeacherEmail'){{$message}} @enderror</span> </br>
        <label>Bölüm</label></br>
        <select class="form-select" name="Teacher_DepartmentID">
         <option selected value="{{$teachers->department->DepartmentID}}">{{$teachers->department->DepartmentName}}</option>
        @foreach($departments as $key)
        <option value="{{$key->DepartmentID}}">{{$key->DepartmentName}}

        </option>

        @endforeach
          </select> </br>
        <input type="submit" value="Güncelle" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop