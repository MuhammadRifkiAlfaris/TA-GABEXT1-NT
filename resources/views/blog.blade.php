<!DOCTYPE html>
<html>
<head>
    <title> Web Programing</title>
</head>
<body>
<h3>{{ $sib }}</h3>
<p>Judul Artikel</p>
<ul>
    @foreach($judul_artikel as $ja)
    <li>{{ $ja }}</li>
    @endforeach
</ul>
</body>
</html>