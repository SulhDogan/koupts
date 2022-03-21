@extends('periods.layout')
@section('content')
<div class="card">
  <div class="card-header">Dönem Bilgileri</div>
  <div class="card-body">
      
      <form action="{{ url('period/' .$periods->PeriodID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="PeriodID" id="id" value="{{$periods->PeriodID}}" id="id" />
        <label>Dönem İsmi</label></br>
        <input type="text" name="PeriodName" id="name" value="{{$periods->PeriodName}}" class="form-control"></br>
        <span class="text-danger">@error('PeriodName'){{$message}} @enderror</span> </br>
        <input type="submit" value="Güncelle" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop