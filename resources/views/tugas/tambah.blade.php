<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<title>Input Data</title>
</head>
<body>
    <div class="container">
    <h1>Tabel Tugas</h1>

	<a href="/tugas " class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
        <label class="form-label">IDPegawai</label>
		 <input type="text" class="form-control" name="IDPegawai" required="required">
        </div>
        <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="datetime" class="form-control" name="Tanggal" required="required">
        </div>
        <div class="mb-3">
        <label class="form-label">NamaTugas</label>
        <input type="text" class="form-control" name="NamaTugas" required="required">
        </div>
        <div class="mb-3">
        <label class="form-label">Status</label>
        <input type="text" class="form-control" maxlength="1" name="Status" required="required">
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>