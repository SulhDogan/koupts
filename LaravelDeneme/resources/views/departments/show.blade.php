@extends('departments.layout')
@section('content')
<div class="card">
  <div class="card-header">Bölüm Sayfası</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Bölüm İsmi : {{ $departments->DepartmentName }}</h5>
        <p class="card-text">Fakülte İsmi {{ $departments->faculty->FacultyName }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@stop
