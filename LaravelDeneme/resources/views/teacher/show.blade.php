@extends('teacher.layout')
@section('content')
<div class="card">
  <div class="card-header">Öğretmen Sayfası</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Sicil Numarası : {{ $teacher->TeacherRegistrationNumber }}</h5>
        <p class="card-text">İsmi :{{ $teacher->TeacherName }}</p>
        <p class="card-text">Soyismi :{{ $teacher->TeacherSurname }}</p>
        <p class="card-text">Şifre :{{ $teacher->TeacherPassword }}</p>
        <p class="card-text">Ünvan :{{ $teacher->TeacherDegree }}</p>
        <p class="card-text">E-Posta :{{ $teacher->TeacherEmail }}</p>
        <p class="card-text">Bölüm : {{ $teacher->department->DepartmentName }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@stop