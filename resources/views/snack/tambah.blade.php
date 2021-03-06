@extends("layout.ceria")
@section("title", "Input Snack")

@section("isikonten")
    <h1>Input Snack</h1>

	<a href="/snack " class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>


	<form action="/snack/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Merk</label>
            <input type="text" class="form-control" name="merksnack" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stocksnack" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="ya" name="tersedia" value="Y" required>
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
@endsection
