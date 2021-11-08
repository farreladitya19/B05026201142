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
         body{
            background-color: #700000;
        }
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
        width: 250px;
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
    <div class="row mt-3">
      <h2 class="text-center mb-4">BMI Index Calculator</h2>
    </div>
    <div class="row">
      <form  target="/blank" id="regform" class="form-inline">

        <!-- Height -->
        <div class="row">
            <div class="col-2"></div>
          <div class="col-4 mb-3">
              <div class="form-group">
              <label for="Name" class="form-label">Your height in inches is</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-3">
           <?php $height = $_POST["inputheight"];
           echo $height ?>
        </div>
        <div class="col-2"></div>
    </div>
        <!-- End Height -->

        <!-- Weight -->
        <div class="row">
        <div class="col-2"></div>
          <div class="col-4 mb-3">
              <div class="form-group">
              <label for="nrp" class="form-label">Enter your weight in pounds</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-3">
        <?php $weight = $_POST["inputweight"];
           echo $weight ?>
        </div>
        <div class="col-2"></div>
    </div>
        <!-- End Weight -->

        <!-- Result -->
        <div class="row">
        <div class="col-2"></div>
          <div class="col-4 mb-3">
              <div class="form-group">
              <label for="nrp" class="form-label">Your Body Mass Index is</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-3">
        <?php $result = ($weight/($height*$height))*703;
           echo $result;
            ?>
        </div>
        <div class="col-2"></div>
    </div>
        <!-- End Result -->


        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>
  </body>
</html>
