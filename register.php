<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f5f5f5;
    }

    .container h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .container form {
      display: grid;
      gap: 10px;
    }

    .container label {
      font-weight: bold;
    }

    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      width: 100%;
    }

    .container button[type="submit"] {
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      width: 100%;
    }

    .container button[type="submit"]:hover {
      background-color: #45a049;
    }

    .container .error {
      color: red;
    }
  </style>
  <title>Registration Page</title>
</head>
<body>
  <div class="container">
    <h1>Registration Page</h1>
    <form id="registrationForm">
      <div>
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Enter your name">
        <small id="nameError" class="error"></small>
      </div>
      <div>
        <label for="email">Email address</label>
        <input type="email" id="email" placeholder="Enter your email">
        <small id="emailError" class="error"></small>
      </div>
      <div>
        <label for="mobile">Mobile No</label>
        <input type="tel" id="mobileno" placeholder="Enter your mobile no">
        <small id="mobileError" class="error"></small>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter a password">
        <small id="passwordError" class="error"></small>
      </div>
      <div>
        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="password_confirm" placeholder="Enter a Confirm password">
        <small id="ConfirmpasswordError" class="error"></small>
      </div>
      <div>
        <label for="city">City</label>
        <input type="text" id="city" placeholder="Enter a City Name">
        <small id="cityError" class="error"></small>
      </div>
      <div>
        <label for="state">State</label>
        <input type="text" id="state" placeholder="Enter a State Name">
        <small id="stateError" class="error"></small>
      </div>
      <button type="button" onclick="validateForm()">Register</button>
    </form>
  </div>

  <script>
    function validateForm() {
      var nameInput = document.getElementById("name");
      var emailInput = document.getElementById("email");
      var passwordInput = document.getElementById("password");
      var ConfirmpasswordInput = document.getElementById("password_confirm");
      var cityInput = document.getElementById("city");
      var stateInput = document.getElementById("state");
      var mobileno = document.getElementById("mobileno");


      var nameError = document.getElementById("nameError");
      var emailError = document.getElementById("emailError");
      var passwordError = document.getElementById("passwordError");
      var confirmpasswordError = document.getElementById("ConfirmpasswordError");
      var cityError = document.getElementById("cityError");
      var stateError = document.getElementById("stateError");
      var mobilenoError = document.getElementById("mobileError");

      nameError.textContent = "";
      emailError.textContent = "";
      passwordError.textContent = "";
      confirmpasswordError.textContent = "";
      cityError.textContent = "";
      stateError.textContent  = "";
      mobilenoError.textContent = "";

      if (nameInput.value.trim() === "") {
        nameError.textContent = "Name is required";
        return 0;
      }

      if (emailInput.value.trim() === "") {
        emailError.textContent = "Email is required";
        return 0;
      }

      if (passwordInput.value.trim() === "") {
        passwordError.textContent = "Password is required";
        return 0;
      }
        
      if (ConfirmpasswordInput.value.trim() === "") {
        confirmpasswordError.textContent = "Password is required";
        return 0;
      }

      if(ConfirmpasswordInput.value.trim() !== passwordInput.value.trim()){
        confirmpasswordErrortextContent = "Password is does not match";
        return 0;
      }

      if (cityInput.value.trim() === "") {
        cityError.textContent = "City Name is required";
        return 0;
      }

      if (stateInput.value.trim() === "") {
        stateError.textContent = "State Name is required";
        return 0;
      }

    
$.ajax({
        url: "http://localhost/phpproject/registerapi.php",
        type: "POST",
        data: {
            name: nameInput,
            email: emailInput,
            number: mobileno,
            password: passwordInput,
            city : cityInput,
            state : stateInput
        },
        success: function(dataResult) {
            console.log(dataResult);

            // console.log(dataValue);
            swal({
                text: "Sign up Successful",
                button: false,


            })


        }
    });


// console.log("27274274");
    
      // Perform further actions if the form is valid, such as submitting to the server
      // alert("Form submitted successfully!");
      // You can also use AJAX to submit the form data
    }
  </script>
</body>
</html>
