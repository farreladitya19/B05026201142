@extends("layout.ceria")
@section("title", "Welcome to Company DB")

@section("isikonten")
<div class="row">
    <div class="col-6">
        <div class="home-text" style="font-family: Poppins">
            <div class="company-logo"> <h1 style="font-size: 75px">Database <span>Anywhere</span></h1></div>
            <h5>Welcome to Company DB! Explore your database here</h5>
            <div class="button-get-started mt-3" style=""> <a href="/pegawai " class="btn btn-warning"> Get Started</a></div>

        </div>
    </div>

    <div class="col-6"><img src="assets/vector-content.png" style="width: 90%"></div>
</div>
@endsection
