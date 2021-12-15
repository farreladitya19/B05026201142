@extends("layout.ceria")
@section("title", "Edit Karyawan")

@section("isikonten")
<h1>Detail Karyawan</h1>

        <a href="/karyawan1 " class="btn btn-secondary"> < Kembali</a>

	<br/>

	@foreach($karyawan1 as $s)
    <form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="number" class="form-control" name="NIP" value="{{ $s->NIP}}" required="required" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama" value="{{ $s->Nama}}" required="required" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Pangkat</label>
            <input type="text" class="form-control" name="Pangkat" value="{{ $s->Pangkat}}" required="required" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Gaji</label>
            <input type="number" class="form-control" name="Gaji" value="@php
            echo number_format($s->Gaji,0,",",".")
        @endphp" required="required" readonly>
            </div>
	</form>
	@endforeach
@endsection
