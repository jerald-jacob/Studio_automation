<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Camrin Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<?php 
include("nav.php");
 ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST" action="code/word_details.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="ClientName" name="ClientName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="ClientName">Client name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="location" name="location" class="form-control" placeholder="location" required="required">
                  <label for="location">location</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Phone_number" name="Phone_number" class="form-control" placeholder="Phone Number" required="required" autofocus="autofocus">
                  <label for="Phone_number">Phone number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="Engagement" name="Engagement" class="form-control" placeholder="Engagement" >
                  <label for="Engagement">Engagement</label>
                </div>
              </div>
            </div>
          </div>
            <div class="form-group">
            
           <div class="form-row">
             <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="wedding" name="wedding" class="form-control" placeholder="wedding">
                  <label for="wedding">wedding</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="reception" name="reception" class="form-control" placeholder="reception" >
                  <label for="reception">reception</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="Email" class="form-control" name="Email" placeholder="Email address" required="required">
              <label for="Email">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" id="Total_Amount" name="Total_Amount" class="form-control" placeholder="Total Amount" required="required">
                  <label for="Total_Amount">Total Amount</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" id="Advance" name="Advance" class="form-control" placeholder="Advance" required="required">
                  <label for="Advance">Advance</label>
                </div>
              </div>

            </div>
          </div>

           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="Photographer1" id="Photographer1" name="Photographer1" class="form-control" placeholder="Photographer 1" >
                  <label for="Photographer1">Photographer 1</label>
                 </div>
               </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="Photographer2" id="Photographer2" name="Photographer2" class="form-control" placeholder="Photographer 2" >
                  <label for="Photographer2">Photographer 2</label>
                </div>
              </div>
              
            </div>
          </div>
                     <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="Videographer1" id="Videographer1" name="Videographer1" class="form-control" placeholder="Videographer 1" >
                  <label for="Videographer1">Videographer 1</label>
                 </div>
               </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="Videographer2" id="Videographer2" name="Videographer2" class="form-control" placeholder="Videographer 2" >
                  <label for="Videographer2">Videographer 2</label>
                </div>
              </div>
              
            </div>
          </div>

<div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="Videographer3" id="Videographer3" name="Videographer3" class="form-control" placeholder="Videographer 3" >
                  <label for="Videographer3">Videographer 3</label>
                 </div>
               </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="Helicam" id="Helicam" name="Helicam" class="form-control" placeholder="Helicam" >
                  <label for="Helicam">Helicam</label>
                </div>
              </div>
              
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="extra" name="extra" class="form-control" placeholder="extra items live print etc" >
                  <label for="extra">Extra Items</label>
                 </div>
               </div>
              <div class="col-md-6">
                <div class="form-label-group"><label for="messages"><label for="extra">message</label></label>
                  <textarea id="messages" name="messages" class="form-control" placeholder="messages">
                    
                  </textarea>
                  
                </div>
              </div>
              
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block">
        </form>
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
