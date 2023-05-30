<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create a connection
$conn = new mysqli($servername, $username, $password,$database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

 $user = $_POST["name"];
 $userEmail =   $_POST['email'];
 $mobile_no = $_POST['number'];
 $pwd = $_POST['password'];
 $city = $_POST['city'];
 $state = $_POST['state'];

 $sql_u = "SELECT * FROM users WHERE email='$userEmail'";

 $result1 = mysqli_query($conn, $sql_u); 

 $value1 = mysqli_fetch_field($result1);

 if ($result1->num_rows > 0) {
    // output data of each row
         if('$userEmail' == $row["email"]){
             echo json_encode(array("statusCode"=>203 , "status" => 'fail',"message" => 'mail already exist'));
             echo "Already exist";
         }else{
            
         }
    
}else  {
                $sql =   "INSERT INTO `users`(`username`,`email`,`mobile`,`password`,`city`,`state`) VALUES ('$user','$userEmail','$mobile_no','$pwd',`$city`,`$state`)";                
                if ($conn->query($sql) === TRUE) {  
                    echo json_encode(array("statusCode"=>200 , "status" => 'success')); 
                } else {  
                    echo json_encode(array("statusCode"=>201 ,"status" => 'fail'));
                 }  
                 
            }
    
    

?>
