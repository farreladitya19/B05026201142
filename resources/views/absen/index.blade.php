@extends("layout.ceria")
@section("title", "Absen Pegawai")

@section("isikonten")

    <h1>Tabel Absen</h1>

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>
    <form class="mt-3" action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">

	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>

				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}

@endsection
