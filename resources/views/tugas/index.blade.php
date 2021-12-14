@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")
    <h1>Tabel Tugas</h1>
	<a href="/tugas/tambah"  class="btn btn-primary"> + Tambah Tugas Baru</a>

    <form class="mt-3" action="/tugas/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Tugas .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">

	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama}}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}" class="btn btn-warning">Edit</a>
				<a href="/tugas/hapus/{{ $p->ID}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
{{ $tugas->links() }}
@endsection
