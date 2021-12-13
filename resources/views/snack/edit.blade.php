@extends("layout.ceria")
@section("title", "Edit Snack")

@section("isikonten")
<h1>Edit Snack</h1>

        <a href="/snack " class="btn btn-secondary"> < Kembali</a>

	<br/>

	@foreach($snack as $s)
    <form action="/snack/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $s ->kodesnack }}">
        <div class="mb-3">
            <label class="form-label">Merk</label>
            <input type="text" class="form-control" name="merksnack" value="{{ $s->merksnack}}" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stocksnack" value="{{ $s->stocksnack}}" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="ya" name="tersedia" value="Y" value="{{ $s->tersedia}}"  required>
                    <label class="form-check-label" for="hadir">
                      YA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="radio" id="tidak" name="tersedia" value="X" checked="checked" required>
                    <label class="form-check-label" for="tidak">
                      TIDAK
                    </label>
                  </div>
                </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection
