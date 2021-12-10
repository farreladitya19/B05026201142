@extends("layout.ceria")
@section("title", "Tabel Pegawai")

@section("isikonten")

    <h1>Tabel Pegawai</h1>

    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>


	<form class="mt-3" action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">


	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }} " class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

	{{ $pegawai->links() }}
@endsection
