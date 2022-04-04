@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header">Öğrenci Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post"enctype="multipart/form-data">
        @csrf
        <label>Öğrenci Numarası</label></br>
        <input type="text" name="StudentNumber" id="name" class="form-control"></br>
        <span class="text-danger">@error('StudentNumber'){{$message}} @enderror</span> </br>
        <label>Şifre</label></br>
        <input type="text" name="StudentPassword" id="name" class="form-control"></br>
        <span class="text-danger">@error('StudentPassword'){{$message}} @enderror</span> </br>
        <label>İsim</label></br>
        <input type="text" name="StudentName" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherSurname'){{$message}} @enderror</span> </br>
        <label>Soyisim</label></br>
        <input type="text" name="StudentSurname" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherPassword'){{$message}} @enderror</span> </br>
        <label>Bölüm</label></br>
        <select class="form-select" name="Student_DepartmentID">
        
        @foreach($departments as $key)
        <option value="{{$key->DepartmentID}}">{{$key->DepartmentName}}

        </option>

        @endforeach
          </select> </br>
        <label>Sınıf</label></br>
        <input type="text" name="StudentClass" id="name" class="form-control"></br>
        <span class="text-danger">@error('TeacherDegree'){{$message}} @enderror</span> </br>
        <label>Resim</label></br>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="picture">
        </div></br>
        <label>Telefon</label></br>
        <input type="text" name="StudentPhone" id="name" class="form-control"></br>
        <span class="text-danger">@error('StudentPhone'){{$message}} @enderror</span> </br>
        <label>E-posta</label></br>
        <input type="text" name="StudentEMail" id="name" class="form-control"></br>
        <span class="text-danger">@error('StudentEMail'){{$message}} @enderror</span> </br>
        
          
        <input type="submit" value="Kaydet" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop