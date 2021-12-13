<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     {{-- Bootstrap CSS Sidebar --}}
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS DateTime Picker -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

   {{-- Google Font --}}
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

   <title>@yield('title')</title>
   <style>
       body{
           background-image: url("assets/bg-image.jpg");
           background-repeat: no-repeat;
       }
   </style>
</head>
<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
          <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-2" style="background-image: url(https://pbs.twimg.com/profile_images/1365972749810683906/7Ih7rzf2_400x400.jpg)"></a>
            <div class="profile-text text-center mb-4">Farrel Istihsan Aditya <br> 5026201142</div>
            <ul class="list-unstyled components mb-5">
              <li>
                <a href="/home">Home</a>
              </li>
              <li>
                <a href="/pegawai">Pegawai</a>
              </li>
              <li>
                <a href="/absen">Absen</a>
              </li>
              <li>
                <a href="/tugas">Tugas</a>
              </li>
              <li>
                <a href="/snack">Snack</a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
              </button>
              <button
                class="btn btn-dark d-inline-block d-lg-none ml-auto"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <i class="fa fa-bars"></i>
              </button>
              <div class="company-logo">Company <span>DB</span></div>
            </div>
          </nav>

          <!--main container start-->
          <div class="main-container">
              @section("isikonten")
              @show
         </div>
          <!--main container end-->
        </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function () {
            $.extend(true, $.fn.datetimepicker.defaults, {
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                }
            });
        });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
        format: "YYYY/MM/DD HH:mm",
      });
            });
        </script>
      <div class="footer text-center py-3" style="font-family:Arial, Helvetica, sans-serif; color : #ffff; background-color: #1D1919">
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        <br>oleh 5026201142 - Farrel Istihsan Aditya
      </div>
</body>
</html>

