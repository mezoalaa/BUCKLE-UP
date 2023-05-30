<?php
include "./sheard/head.php";
include "config.php";

if (isset($_POST['submit'])){
    $search=$_POST['search'];

    $select="SELECT * FROM flight where Flight_No=$search";
    $s=mysqli_query($con,$select);
}



?>