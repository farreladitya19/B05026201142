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

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="Tanggal" required="required"> <br/>
		NamaTugas <input type="text" name="NamaTugas" required="required"> <br/>
        Status <input type="text" maxlength="1" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
