@extends("layout.ceria")
@section("title", "Tabel Karyawan")

@section("isikonten")

    <h1>Tabel Karyawan</h1>

    <a href="/karyawan1/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>


	<form class="mt-3" action="/karyawan1/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">


	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th>Opsi</th>

		</tr>
		@foreach($karyawan1 as $s)
		<tr>
            <td>{{ $s->NIP }}</td>
			<td>{{ $s->Nama }}</td>
			<td>{{ $s->Pangkat}}</td>
			<td>@php
                echo number_format($s->Gaji,0,",",".")
            @endphp</td>
			<td>
				<a href="/karyawan1/edit/{{ $s->NIP}} " class="btn btn-warning">Edit</a>
				<a href="/karyawan1/hapus/{{ $s->NIP}}" class="btn btn-danger">Hapus</a>
                <a href="/karyawan1/detail/{{ $s->NIP}}" class="btn btn-success">View Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

	{{ $karyawan1->links() }}
@endsection
