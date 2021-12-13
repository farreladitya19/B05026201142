@extends("layout.ceria")
@section("title", "Detail Snack")

@section("isikonten")
<h1>Detail Snack</h1>

        <a href="/snack " class="btn btn-secondary"> < Kembali</a>

	<br/>

	@foreach($snack as $s)
    <form action="/snack/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $s ->kodesnack }}">
        <div class="mb-3">
            <label class="form-label">Merk</label>
            <input type="text" class="form-control" name="merksnack" value="{{ $s->merksnack}}" required="required" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stocksnack" value="{{ $s->stocksnack}}" required="required" readonly>
            </div>
        <div class="mb-3">
            <label class="form-label">Tersedia</label>
            <input type="text" class="form-control" name="stocksnack" value="{{ $s->tersedia}}" required="required" readonly>
            </div>
	</form>
	@endforeach
@endsection
