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
      textarea {
        vertical-align: top;
        width: 600px;
      }
      input {
        width: 600px;
      }
      body {
        background-image: url('https://images.pexels.com/photos/346529/pexels-photo-346529.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
      }
      .card-title {
        position: relative;
        background-color: #18384f;
        color: white;
        padding: 15px 0px;
        background: linear-gradient(to right, #275f84, #8eb0c2);
      }
      .card {
        width: 800px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
      <div class="col"></div>
      <div class="col-10">
        <div class="card">
          <div class="card-body">
            <div class="card-title text-center mb-3"> <h2>REGISTRATION FORM</h2> <br> <h5>Please Enter Your Personal Data</h5></div>
            <div class="card-text">
              <form action="https://www.instagram.com/farreladitya19/" target="/blank" id="regform" class="row">

                <!-- User ID -->
                <div class="form-group">
                  <label for="userID" class="form-label">User ID</label>
                  <input type="text" id="InputUserID" required />
                  <p id="p1"></p>
                </div>
                <!-- End User ID -->
                <!-- Password -->
                <div class="form-group">
                  <label for="Password" class="form-label">Password</label>
                  <input type="password" id="InputPassword" required/>
                  <p id="p2"></p>
                </div>
                <!-- End Password -->
                <!-- Name -->
                <div class="form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input id="InputName" required />
                  <p id="p3"></p>
                </div>
                <!-- End Name -->
                <!-- Address -->
                <div class="form-group mb-3">
                  <label for="Address" class="form-label">Address</label>
                  <input id="InputAddress" />
                </div>
                <!-- End Addres -->
                <!-- Country -->
                <div class="form-group">
                  <label for="Country">Country</label>
                  <select id="inputCountry" required>
                    <option value="">(Please select a country)</option>
                    <option value="1">Indonesia</option>
                    <option value="2">Honduras</option>
                    <option value="3">Maldives</option>
                  </select>
                  <p id="p4"></p>
                </div>
                <!-- End Country -->
                <!-- Zip Code -->
                <div class="form-group mb-3">
                  <label for="ZIPcode" class="form-label">ZIP Code</label>
                  <input type="number" id="InputZIPcode" required />
                </div>
                <!-- End ZIP Code -->
                <!-- Email -->
                <div class="form-group">
                  <label for="email" class="form-label">Email address</label>
                  <input type="text" class="email" id="InputEmail" required/>
                  <p id="p5"></p>
                </div>
                <!-- End Email -->
                <!-- Sex -->
                <div class="form-group">
                  <label for="sex" class="form-label">Sex</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"/>
                    <label class="form-check-label" for="inlineRadio1"> Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  <p id="p6"></p>
                </div>
                <!-- End Sex -->
                <!-- Language -->
                <div class="form-group">
                  <label for="language" class="form-label">Language</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">English</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">Non English</label>
                  </div>
                  <p id="p7"></p>
                </div>
                <!-- End Language -->
                <!-- About -->
                <div class="form-group">
                  <label for="About" class="form-label">About</label>
                  <textarea rows="5" id="About"> </textarea>
                </div>
                <!-- End About -->
                <div class="col text-center"><button class="btn btn-primary mt-5" type="submit" id="submit">Submit</button></div>
                </div>
              </form>
              <!-- End Form -->
            </div>


          </div>
        </div>
      </div>
      <div class="col"></div>
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

          // user ID Rules
          var UserID = $("#InputUserID").val();

          if(UserID.length < 5 || UserID.length > 12)
  			{
  				$("#p1").text("User ID must be of length 5 to 12");
  				$("#InputUserID").focus();
  				return false;
  			}

        // Password Rules
        var password = $("#InputPassword").val();
         if(password.length < 7 || password.length > 16)
  			{
  				$("#p2").text("Password must be of length 7 to 12");
  				$("#InputPassword").focus();
  				return false;
        }

        // Name Rules
        var name = $("#InputName").val();
        var pattern= /^[a-zA-Z\s]+$/;
        if(!name.match(pattern))
        {
        $("#p3").text("Name must be alphabet");
  				$("#InputPassword").focus();
          return false;
        }

        // Country Rules
        var country = $('select option:selected').val();
        if (country == 0){
          $("#p4").text("Country must be select");
          $("#InputCountry").focus();
          return (false);
        }

        // Email Rules
        var email = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var emailVal = $("#InputEmail").val();
        if(!(emailVal.match(email))){
          $("#p5").text("Invalid Email");
          $("#InputEmail").focus();
          return false;
        }

        // Sex Rules
        var sex = $("input[type='radio']:checked");
        if(sex.length == 0 ){
          $("#p6").text("Sex must be select");
          return (false);
      }

      // Language Rules
        var language = $("input[type='checkbox']:checked");
        if(language.length == 0 ){
          $("#p7").text("Language must be select");
          return (false);
      }
        })
      })
    </script>
  </body>
</html>
