@extends('faculty.layout')
@section('content')
<div class="card">
  <div class="card-header">Fakülte Sayfası</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Fakülte İsmi : {{ $faculties->FacultyName }}</h5>
  </div>
      
    </hr>
  
  </div>
</div>
@stop