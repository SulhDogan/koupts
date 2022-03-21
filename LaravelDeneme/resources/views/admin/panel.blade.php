<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Panel</title>
</head>
<body>

<div class="d-grid gap-2">
        <label>HoşGeldin {{$data->AdminUsername}}</label>
  <button class="btn btn-primary" type="button" onclick="location.href='{{ url('panellogout') }}'">Çıkış Yap</button>
  <button class="btn btn-primary" type="button"onclick="location.href='{{ url('faculty') }}'">Fakülte İşlemleri</button>
  <button class="btn btn-primary" type="button"onclick="location.href='{{ url('department') }}'">Bölüm İşlemleri</button>
  <button class="btn btn-primary" type="button"onclick="location.href='{{ url('period') }}'">Dönem İşlemleri</button>
  <button class="btn btn-primary" type="button"onclick="location.href='{{ url('teacher') }}'">Öğretmen İşlemleri</button>
  <button class="btn btn-primary" type="button"onclick="location.href='{{ url('student') }}'">Öğrenci İşlemleri</button>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>