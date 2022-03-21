@extends('periods.layout')
@section('content')
<div class="card">
  <div class="card-header">Dönem Sayfası</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Dönem İsmi : {{ $periods->PeriodName }}</h5>
  </div>
      
    </hr>
  
  </div>
</div>
@stop