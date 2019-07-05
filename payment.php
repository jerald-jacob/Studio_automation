<!DOCTYPE html>
<html lang="en">

<!--payment.php-->
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Update Payement details</div>
      <div class="card-body">

        <form method="POST" action="payment.php"> 
         
          <div class="form-group">
            <div class="form-label-group">

              <select id="ClientName" name="ClientName" class="form-control"  required="required">
                 <?php

include('code/connection.php');
$result = mysqli_query($db,"SELECT ClientName FROM camrin_work_registration ");
while($row = mysqli_fetch_array($result))
{
  echo "<option>" . $row['ClientName'] . "</option>";
}?>
              </select>
              
            </div>
<button type="submit" class="btn btn-primary btn-block">Search</button>
          
          </div>

        </form>


<?php
error_reporting(0);
if($_POST['ClientName']!=''){

              
$ClientName=$_POST['ClientName'];
include('code/connection.php');
$result = mysqli_query($db,"SELECT * FROM camrin_work_registration where ClientName='$ClientName'");
while($row = mysqli_fetch_array($result))
{
  echo " <div class='card card-register mx-auto mt-5'>
                <div class='form-label-group'>
                 
                  
 ";
echo "<input type ='hidden' id='ClientName'disabled='' class='form-control'value=" . $row['ClientName'] . "> <lable>Engagement Payement</lable><br>"; 
echo "<input type ='text'   id='ClientName' class='form-control'value=" . $row['ClientName'] . "> <lable>Wedding Payement</lable><br>"; 
echo"
                </div>
                <div class='form-label-group'>
                  <input type='ClientName' id='inputPassword' class='form-control' placeholder='Password' >
                 
                </div>
              </div>


";
echo "<th>" . $row['Total_Amount'] . "</tr>";
echo "<th>" . $row['Advance'] . "</tr>";
echo "<th>" . $row['Total_Amount'] . "</tr>";
}
}



  ?>
      
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
