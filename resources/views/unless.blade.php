<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unless</title>
</head>
<body>
  {{-- Jika Bernilai false baru di jalankan --}}
    @unless ($isAdmin)
        <p>Selamat Datang User</p>
    @endunless
</body>
</html>