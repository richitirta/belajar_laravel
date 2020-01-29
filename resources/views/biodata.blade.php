<!DOCTYPE html>
<html>
<head>
	<title>Passing Data Controller</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://www.instagram.com/richitirta">rich</a>
	<br>
	<p>Nama : {{$nama}}</p>
	<p>Mata Pelajaran</p>
	<ul>
	@foreach($matkul as$m)
	<li> {{$m}}</li>
	@endforeach
	</ul>
 
</body>
</html>