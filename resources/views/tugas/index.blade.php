@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")
    <h1>Tabel Tugas</h1>
	<a href="/tugas/tambah"  class="btn btn-primary"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
            <th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
            <td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
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
@endsection
