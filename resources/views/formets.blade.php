<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- CSS -->
    <style>
      .container{
          align-items: center;
          justify-content: center;
          width: 670px;
          background: white;
          padding: 20px;
          border-radius: 10px;
          margin: 50px auto;
          border: 1px solid black;

      }

      label {
        width: 150px;
      }
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type='number'] {
        -moz-appearance: textfield;
      }
      select {
        width: 300px;
        height: 30px;
      }
      button{
        width: 250px;
      }
      input {
        width: 300px;
      }
      p{
        color: red;
      }
    </style>
  </head>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-4">Farrel Istihsan Aditya <br> Farrel <br> 5026201142</div>
    </div>
    <div class="row mt-3">
      <h2 class="text-center mb-4">Form Pendaftaran Kuota Internet</h2>
    </div>
    <div class="row">
      <form action="https://www.instagram.com/farreladitya19/" target="/blank" id="regform" class="form-inline">

        <!-- Nama -->
        <div class="row">
          <div class="col-4">
              <div class="form-group">
              <label for="Name" class="form-label">Nama Mahasiswa</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-7">
          <input id="InputName"/>
          <p id="p1"></p>
        </div>
    </div>
        <!-- End Nama -->

        <!-- NRP -->
        <div class="row">
          <div class="col-4">
              <div class="form-group">
              <label for="nrp" class="form-label">NRP Mahasiswa</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-7">
          <input type="number" id="InputNRP"  />
          <p id="p2"></p>
        </div>
    </div>
        <!-- End NRP -->

        <!-- Jurusan -->
        <div class="row">
          <div class="col-4">
              <div class="form-group">
              <label for="jurusan" class="form-label">Jurusan</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-7">
          <select id="inputJurusan" >
            <option value=""></option>
            <option value="1">Sistem Informasi</option>
            <option value="2">Elektro</option>
            <option value="3">Informatika</option>
          </select>
          <p id="p3"></p>
        </div>
    </div>
        <!-- End Jurusan -->

        <!-- No Handphone -->
        <div class="row">
          <div class="col-4">
              <div class="form-group">
              <label for="nohp" class="form-label">Nomor Handphone</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-7">
          <input type="number" id="InputNoHP"  />
          <p id="p4"></p>
        </div>
    </div>
        <!-- End No Handphone -->

        <!--Button-->
        <div class="row mb-3 text-center">
          <div class="col">
            <button class="btn btn-primary" type="submit" id="submit">Kirim</button>
            <button class="btn btn-success text-black" type="reset">Reset</button></div>


        </div>
      </form>
      <!-- End Form -->
    </div>
    <footer class="text-white mt-3">Farrel Istihsan Aditya / 5026201142</footer>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#submit").click(function(){

        // Nama Rules
        var name = $("#InputName").val();
        var pattern= /^[a-zA-Z\s]+$/;
        if(!name.match(pattern) || name.length == 1)
        {
        $("#p1").text("Nama harus alfabet dan di atas 1 huruf");
  				$("#InputName").focus();
          return false;
        }

        // NRP Rules
        var nrp = $("#InputNRP").val();
        if(nrp.length < 10 || nrp.length > 10){
          $("#p2").text("NRP harus 10 digit");
  				$("#InputNRP").focus();
          return false;
        }

        // Jurusan Rules
        var jurusan = $('select option:selected').val();
        if (jurusan == 0){
          $("#p3").text("Jurusan harus dipiih");
          $("#InputJurusan").focus();
          return (false);
        }

        // No Handphone Rules
        var nohp = $("#InputNoHP").val();
        if(nohp.length < 10 ){
          $("#p4").text("Masukkan Nomor Handphone yang valid");
  				$("#Inputnohp").focus();
          return false;
        }
        })
      })
    </script>
  </body>
</html>
