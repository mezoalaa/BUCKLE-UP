<?php
include "config.php";

$select = "SELECT * FROM flight";
$s = mysqli_query($con,$select);


?>

<main class="" id="main">

    <div class="container col-6">

       <div class="card">
         <div class="car-body">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Flight_Name</th>
                    <th>Flight_Date</th>
                    <th>Flight_Location</th>
                    <th>Flight_Destination</th>
                    <th>Agency_ID</th>

                </tr>
               <?php foreach($s as $data):?>
               <tr>
                  <td><?= $data['Flight_No'] ?></td>
                  <td><?= $data['Flight_Name'] ?></td>
                  <td><?= $data['Flight_Date'] ?></td>
                  <td><?= $data['Flight_Location'] ?></td>
                  <td><?= $data['Flight_Destination'] ?></td>
                  <td><?= $data['Agency_ID'] ?></td>


                </tr>
               <?php endforeach ;?>
                
            </table>


         </div>
       </div>
    </div>


</main>