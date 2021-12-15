@extends("layout.ceria")
@section("title", "Input Karyawan")

@section("isikonten")
    <h1>Input Karyawan</h1>

	<a href="/karyawan1 " class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>


	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="number" class="form-control" name="NIP"  required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama"  required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Pangkat</label>
            <input type="text" class="form-control" name="Pangkat"  required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Gaji</label>
            <input type="number" class="form-control" name="Gaji"  required="required">
            </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
