<!DOCTYPE html>
<head>
  <title>Praktek | Set Content</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    p {
      text-align: center;
      font-size: x-large;
    }
    button {
      font-size: medium;
    }
    body {
      background-color: #5e81f5;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    hr {
      height: 0px;
      border: none;
      border-top: 30px solid black;
    }
  </style>
</head>

<body>
  <div class="row">
    <h1 class="text-center text-white mt-5">Selamat Datang Di Bukalepek</h1>
    <h3 class="text-center text-white">Belanja Puas, Harga Pas!</h3>
    <hr />
  </div>
  <div class="row mt-5">
    <div class="col-md-3 ms-5">
      <img src="ricebowl.JPG" alt="foto-produk" width="500" />
      <h4>
        <br />
        Ricebowl Chicken Teriyaki
      </h4>
    </div>

    <div class="col-md-8">
      <div class="row text-center">
        <p id="test1">Barang dimasukkan ke keranjang</p>
        <p id="test2"></p>

        <p>No. Resi: <input type="text" id="test3" value="...." /></p>
      </div>
      <div class="row">
        <!-- Jarak -->
        <div class="col-md-4"></div>
        <!-- /end Jarak -->
        <div class="col-md-7">
          <button id="btn1">Bayar</button>
          <button id="btn2">JNE Express Kilat Petir</button>
          <button id="btn3">Tampilkan No. Resi</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function () {
      $('#btn1').click(function () {
        $('#test1').html('Pembayaran Diterima <br> <br> Pilih Jasa Pengiriman..');
      });
      $('#btn2').click(function () {
        $('#test2').html('Gunakan JNE Express Kilat Petir');
      });
      $('#btn3').click(function () {
        $('#test3').val('78945XXXX7123');
      });
    });
  </script>
</body>
