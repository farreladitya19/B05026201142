@extends("layout.ceria")
@section("title", "Edit Tugas")

@section("isikonten")
        <h1>Edit Tugas</h1>

        <a href="/tugas " class="btn btn-secondary"> < Kembali</a>

	<br/>


	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
        <div class="mb-3">
            <label class="form-label">Pegawai</label>
            <select class="form-select" name="IDPegawai" aria-label="Default select example">
                @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
            </select>
            </div>
        <div class="mb-3">
            <label for="datetimepicker1" class="form-label">Tanggal</label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker">
                  <input type="text" class="form-control" name="Tanggal" value="{{ $p->Tanggal}}" required/>
                  <div class="input-group-addon input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                </div>
              </div>
            </div>
        <div class="mb-3">
        <label class="form-label">Nama Tugas</label>
        <input type="text" class="form-control" name="NamaTugas" required="required" value="{{ $p->NamaTugas }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="hadir" name="Status" value="S" value="{{ $p->Status}}" required>
                <label class="form-check-label" for="hadir">
                  SUDAH
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="tidak" name="Status" value="B" checked="checked" required>
                <label class="form-check-label" for="tidak">
                  BELUM
                </label>
              </div>
            </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	</form>
	@endforeach

</div>
@endsection
