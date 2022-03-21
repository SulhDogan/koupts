<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Panel</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
      <h4>Admin Giriş Ekranı</h4>
      <hr>
        <form action="{{route('panelregister-user')}}" method="post">
          @csrf
          @if(Session::has('Başarılı'))
          <div class="alert alert-success">{{Session::get('Başarılı')}}</div>
          @endif
          @if(Session::has('Başarısız'))
          <div class="alert alert-danger">{{Session::get('Başarısız')}}</div>
          @endif
          <div class="form-group">
            <label for="AdminUsername">Kullanıcı Adı </label>
            <input type="text" class="form-control" placeholder="Kullanıcı Adınızı Giriniz"name="AdminUsername">
            <span class="text-danger">@error('AdminUsername'){{$message}} @enderror</span>     
          </div>
          <div class="form-group">
            <label for="AdminPassword">Şifre </label>
            <input type="password" class="form-control" placeholder="8 Haneli Şifrenizi Giriniz"name="AdminPassword">
            <span class="text-danger">@error('AdminPassword'){{$message}} @enderror</span>
          </div>
          <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Kaydet</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>