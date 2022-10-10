<?php

include_once 'data.php';

  $phone_number = $_POST["phone_number"]; 
  $password = $_POST["password"];
  $address = $_POST["address"];
  $email = $_POST["email"];
  

$sql = "INSERT INTO user_client (phone_number, password, email, address,) VALUES ('$phone_number', '$password', '$address', '$email');";

mysqli_query($conn, $sql);

 header("location: ../food_site.html?sigsignup=sucess");
 
 
 
 
 
 
 
?> 
 