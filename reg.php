<?php
include "config.php";

if(isset($_POST["submitButton"])){
    $name=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert = "INSERT INTO users VALUES(NULL ,'$name' , '$lastName ', '$username' ,'$email' , '$password',2023/5/9)";

    mysqli_query($con , $insert);
  
    header("location: login.php ");
}


?>