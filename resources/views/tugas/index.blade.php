<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas</title>
</head>
<body>
    <h1>Tabel Tugas</h1>
	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
            <th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
            <td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
