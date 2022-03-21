@extends('periods.layout')
@section('content')
<div class="card">
  <div class="card-header">Dönem Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('period') }}" method="post">
        {!! csrf_field() !!}
        <label>Dönem İsmi</label></br>
        <input type="text" name="PeriodName" id="name" class="form-control"></br>
        <span class="text-danger">@error('PeriodName'){{$message}} @enderror</span> </br>
        <input type="submit" value="Kaydet" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop