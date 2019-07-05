<!DOCTYPE html>
<html lang='en'>
<!--cam_client_view.php-->
<head>

  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta name='description' content=''>
  <meta name='author' content=''>

  <title>client details</title>
<style type="text/css">
  table, th, td {
  border: 2px solid black;
}
</style>
  <!-- Custom fonts for this template-->
  <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>

  <!-- Page level plugin CSS-->
  <link href='vendor/datatables/dataTables.bootstrap4.css' rel='stylesheet'>

  <!-- Custom styles for this template-->
  <link href='css/sb-admin.css' rel='stylesheet'>

</head>

<body id='page-top'>

 <?php 
include('nav.php');
 ?>
    <div id='content-wrapper'>

      <div class='container-fluid'>

        <!-- Breadcrumbs-->
        <ol class='breadcrumb'>
          <li class='breadcrumb-item'>
            <a href='index.html'>Dashboard</a>
          </li>
          <li class='breadcrumb-item active'>client details</li>
        </ol>

        <!-- Page Content -->
      <?php
$id = $_GET['id'];
echo $id;
include('code/connection.php');
$result = mysqli_query($db,"SELECT * FROM camrin_work_registration where id='$id'");
while($row = mysqli_fetch_array($result))
{


echo "
<table border='2'>
<thead>";

echo " <tr> <th colspan='3'> Invoice Number #2019/" . $row['id'] . "</th>";
echo "<th>" . $row['wedding'] . "</tr>";
echo "
 
<tr> 
 <td colspan='2'> <strong>Client Details:</strong>
";
echo "<br>" . $row['ClientName'] . "<br>". $row['location'] . "<br>". $row['Phone_number'] . "<br>". $row['Email'] . "<br> Engagement Date ". $row['Engagement'] . "<br> Wedding Date ". $row['wedding'] . "<br> Reception Date ". $row['reception'] ;
echo "
 <td colspan='2'> <strong>Photographer Details:</strong>
 ";
 echo "<br> Photographer 1 <strong>  " . $row['Photographer1'] . "<br></strong>Photographer 2 <strong>". $row['Photographer2']."<br></strong>videographer 1 <strong>". $row['Videographer1']."<br></strong>videographer 2 <strong>". $row['Videographer2']."<br></strong>videographer 3 <strong>". $row['Videographer3']."<br></strong>Helicam  <strong>". $row['Helicam']."<br></strong>Extra  <strong>". $row['extra']."<br></strong>Message  <strong>". $row['messages']; 
 echo "
</tr> 
</thead> 

<tbody>
 <tr> <th>Works / Event</th> <th>Payment</th> </tr>

";
echo "<tr><td><strong> Total Amount</td><td></<strong><strong>".$row['Total_Amount']. "</<strong></td></tr>";
echo "<tr> <td> Advance</td><td>".$row['Advance']. "</td> </tr> ";
echo "<tr> <td> Engagement</td><td>".$row['Advance']. "</td> </tr> ";
echo "<tr> <td> Wedding</td><td>".$row['Advance']. "</td> </tr> ";
echo "<tr> <td> Album</td><td>".$row['Advance']. "</td> </tr> ";
echo "<tr> <td><strong> Balance</td><td>".$row['Advance']. "</<strong></td> </tr> ";


echo " </td></tr>
</tbody> 
<tfoot>
 <tr> 
  <th colspan='3'>Subtotal</th>
   <td> 110.00</td> </tr>
     <tr> <th colspan='3'>Grand Total</th> <td>$ 118.80</td> </tr> 
   </tfoot> 
 </table>
";





}





            ?>







      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class='sticky-footer'>
        <div class='container my-auto'>
          <div class='copyright text-center my-auto'>
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class='scroll-to-top rounded' href='#page-top'>
    <i class='fas fa-angle-up'></i>
  </a>

  <!-- Logout Modal-->
  <div class='modal fade' id='logoutModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='exampleModalLabel'>Ready to Leave?</h5>
          <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>×</span>
          </button>
        </div>
        <div class='modal-body'>Select 'Logout' below if you are ready to end your current session.</div>
        <div class='modal-footer'>
          <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
          <a class='btn btn-primary' href='login.html'>Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src='vendor/jquery/jquery.min.js'></script>
  <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

  <!-- Core plugin JavaScript-->
  <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

  <!-- Custom scripts for all pages-->
  <script src='js/sb-admin.min.js'></script>

</body>

</html>
