@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Öğrenci İşlemleri</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
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
                                        <th>Öğrenci Numarası</th>
                                        <th>Şifre</th>
                                        <th>İsim</th>
                                        <th>Soyisim</th>
                                        <th>Bölüm</th>
                                        <th>Sınıf</th>
                                        <th>Resim</th>
                                        <th>Telefon</th>
                                        <th>E-Posta</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->StudentNumber }}</td>
                                        <td>{{ $item->StudentPassword }}</td>
                                        <td> {{ $item->StudentName }}</td>
                                        <td> {{$item->StudentSurname}} </td>
                                        <td>  {{$item->department->DepartmentName}}  </td>
                                        <td>  {{$item->StudentClass }}  </td>
                                        <td>  <img src="{{   asset($item->StudentPhoto)   }}" width="50" height="50">  </td>
                                        <td>{{  $item->StudentPhone }}</td>
                                        <td>{{  $item->StudentEMail }}</td>
                                        <td>
                                            <a href="{{ url('/student/' . $item->StudentNumber) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Göster</button></a>
                                            <a href="{{ url('/student/' . $item->StudentNumber . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzenle</button></a>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $item->StudentNumber) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</button>
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