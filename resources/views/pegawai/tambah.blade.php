@extends("layout.ceria")
@section("title", "Input Snack")

@section("isikonten")
    <h1>Input Snack</h1>

	<a href="/snack " class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>


	<form action="/snack/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="text" class="form-control" name="umur" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea required="required" class="form-control" name="alamat"></textarea>
                </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
