<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
</head>
<body style="text-align:center;">

<h1>Kocaeli Üniversitesi Proje Kontrol Sistemi</h1>
<p>Giriş Ekranına Hoş Geldiniz Lütfen Aşağıdan İlgili Kullanıcı Girişini Tıklayınız.</p>
<br/>

<div class="container">
  <div class="row"style="display: flex;align-items: center;justify-content: center;">
    <div class="col">
    <button type="button" class="btn btn-outline-primary" onclick="location.href='{{ url('studentlogin') }}'" >Öğrenci Girişi</button>
    </div>
    <div class="col">
    <button type="button" class="btn btn-outline-success" onclick="location.href='{{ url('teacherlogin') }}'">Öğretmen Girişi</button>
    </div>
  </div>
</div>
</body>
</html>