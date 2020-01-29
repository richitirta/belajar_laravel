
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Home</title>
</head>
<body>

 
	
	<h3>Data Pegawai</h3>
 
	<a href="/pejabat/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
<table class="table table-hover">
  
  
<thead>
		<tr>
			<th scope="col">Nama</th>
			<th scope="col">Jabatan</th>
			<th scope="col">Umur</th>
			<th scope="col">Alamat</th>
			<th>Opsi</th></thead>
		</tr><tbody>
		@foreach($pegawai as $p)
		<tr>
			<td scope="row">{{ $p->pegawai_nama }}</td>
			<td scope="row">{{ $p->pegawai_jabatan }}</td>
			<td scope="row">{{ $p->pegawai_umur }}</td>
			<td scope="row">{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-primary" href="/pejabat/edit/{{ $p->pegawai_id }}" role="button">Edit</a>
				|								
				<a class="btn btn-primary" href="/pejabat/hapus/{{ $p->pegawai_id }}" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach</tbody>
	</table>
 
 
</body>
</html>