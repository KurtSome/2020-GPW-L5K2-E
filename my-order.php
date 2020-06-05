<?php
// make db conection
require("logincheck.php");
require('db.php');
include('customer-system-header.php');

//$getid = $_GET['c_identification'];
//$query .= "WHERE c_identification = $getid ";

$query = "SELECT `order_id`, `order_date`, `order_pay` FROM `order` ";

    
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Chengdu Bus Company</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->


  <!-- Header - set the background image for the header in the line below -->
  <div class="container-fluid">

          <!-- Page Heading -->
        <div>
        <h1 class="hszs1">My Ticket</h1>
        
        
        
        </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="">Remember your ticket ID and own ID!</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Date</th>
                      <th>Order Pay way</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
<?php    
//show data        
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["order_id"] . "</td>";
    echo "<td>" . $row["order_date"] . "</td>";
    echo "<td>" . $row["order_pay"] . "</td>";
    echo "<td><a href='delete-order.php?id=" . $row["order_id"] . "'>delete</a></td>";
    echo "</tr>";
}
          
?>
                  </table>
              </div>
            </div>
          </div>

        </div>

  <!-- Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
            
mysqli_close($connection);
include('customer-system-footer.php');
?>      