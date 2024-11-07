<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div style="text-align: center; padding-top: 50px;">
        <h1>404 - Page Not Found</h1>
        <p>Maaf, Halaman yang anda tuju tidak ada.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali Ke Beranda</a>
    </div>
</body>
</html>
