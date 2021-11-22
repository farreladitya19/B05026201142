<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas</title>
</head>
<body>
    <h1>Tabel Tugas</h1>

	<a href="/tugas "> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="text" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" name="Tanggal" required="required" value="{{ $p->Tanggal}}"> <br/>
		NamaTugas <input type="text" name="NamaTugas" required="required" value="{{ $p->NamaTugas }}"> <br/>
        Status <input type="text" maxlength="1" name="Status" required="required" value="{{ $p->Status}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
