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
        <label for="email">Email address</label>
        <input type="email" id="email" placeholder="Enter your email">
    
      </div>
      
      <div>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter a password">
      </div>
      <button type="button" onclick="login()">Register</button>
    </form>
  </div>

  <script>
    function login() {
     

        var emailInput = document.getElementById("email").value;
	  var passwordInput = document.getElementById("password").value;

$.ajax({
        url: "http://localhost/phpproject/loginapi.php",
        type: "POST",
        data: {
            email: emailInput,
            password: passwordInput,
           
        },
        success: function(dataResult) {
            let test = dataResult;
	          console.log(dataResult);
	          let dataValue = JSON.parse(dataResult);
	          dataValue.statusCode;
	          if (dataValue.statusCode == 200) {
	              swal({
	                  text: "Login Successful",
	                  button: false,
	              });
	             setTimeout(function(){ window.location.href = 'http://localhost/phpproject/dashboard.php'; }, 5000);
	              
	              }else {
	              swal({
	                  text: "Login failed",
	                  button: false,
	              });

                }
        }
    });
    }
  </script>
</body>
</html>
