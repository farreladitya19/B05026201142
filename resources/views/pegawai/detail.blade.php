@extends("layout.ceria")
@section("title", "Detail Pegawai")

@section("isikonten")
<h1>Detail Pegawai</h1>

        <a href="/pegawai " class="btn btn-secondary"> < Kembali</a>

	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required="required" value="{{ $p->pegawai_nama }}" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="text" class="form-control" name="umur" required="required" value="{{ $p->pegawai_umur }}" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea  required="required" class="form-control" name="alamat" readonly>{{ $p->pegawai_alamat }} </textarea>
            </div>
	</form>
	@endforeach
@endsection
