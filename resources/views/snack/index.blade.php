@extends("layout.ceria")
@section("title", "Tabel Snack")

@section("isikonten")

    <h1>Tabel Snack</h1>

    <a href="/snack/tambah" class="btn btn-primary"> + Tambah Snack Baru</a>


	<form class="mt-3" action="/snack/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Snack .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">


	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Merk</th>
			<th>Tersedia</th>
			<th>Opsi</th>

		</tr>
		@foreach($snack as $s)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $s->merksnack }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
				<a href="/snack/edit/{{ $s->kodesnack}} " class="btn btn-warning">Edit</a>
				<a href="/snack/hapus/{{ $s->kodesnack}}" class="btn btn-danger">Hapus</a>
                <a href="/snack/detail/{{ $s->kodesnack}}" class="btn btn-success">View Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

	{{ $snack->links() }}
@endsection
