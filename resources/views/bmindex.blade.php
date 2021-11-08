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
    <div class="row">
      <div class="col-4">Farrel Istihsan Aditya <br> 5026201142</div>
    </div>
    <div class="row mt-3">
      <h2 class="text-center mb-4">BMI Index Calculator</h2>
    </div>
    <div class="row">
      <form action="result" method="post" target="/blank" id="regform" class="form-inline">
        @csrf
        <!-- Height -->
        <div class="row">
          <div class="col-4 mb-3">
              <div class="form-group">
              <label for="height" class="form-label">Enter your height in inches</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-7">
            <input type="number" id="inputheight" name="inputheight"  />
        </div>
    </div>
        <!-- End Height -->

        <!-- Weight -->
        <div class="row">
          <div class="col-4 mb-3">
              <div class="form-group">
              <label for="weight" class="form-label">Enter your weight in pounds</label>
             </div>
          </div>
        <div class="col-1">:</div>
        <div class="col-7">
          <input type="number" id="inputweight" name="inputweight"  />
        </div>
    </div>
        <!-- End Weight -->


        <!--Button-->
        <div class="row mb-3 text-center">
          <div class="col">
            <button class="btn btn-primary" type="submit" id="submit">Submit</button>
            </div>


        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>
  </body>
</html>
