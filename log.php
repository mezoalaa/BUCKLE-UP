<?php
include "config.php";

if(isset($_POST["submitButton"])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $select = "SELECT * FROM users WHERE email='$email' AND password='$password' " ;

    $use=mysqli_query($con,$select);

    $numrows=mysqli_num_rows($use);

    if($numrows==1){
        header("location: index.php");
    }
    else{
        header("location: login.php ");
    }
}

?>