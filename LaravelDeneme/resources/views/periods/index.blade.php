@extends('periods.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Dönem İşlemleri</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/period/create') }}" class="btn btn-success btn-sm" title="Add New Period">
                            <i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle
                        </a>
                        <br/>
                        <br/>
                        @if(Session::has('flash_message'))
          <div class="alert alert-danger">{{Session::get('flash_message')}}</div>
          @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Dönem İsmi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($periods as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->PeriodName }}</td>
                                        <td>
                                            <a href="{{ url('/period/' . $item->PeriodID) }}" title="View Department"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Göster</button></a>
                                            <a href="{{ url('/period/' . $item->PeriodID . '/edit') }}" title="Edit Department"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzenle</button></a>
 
                                            <form method="POST" action="{{ url('/period' . '/' . $item->PeriodID) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Department" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button"onclick="location.href='{{ url('/panel') }}'">Geri Dön</button>
</div>
@endsection