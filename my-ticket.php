<?php
// make db conection
require("logincheck.php");
require('db.php');
include('customer-system-header.php');

//$query .= "WHERE customer.c_identification = $username ";

$query = "SELECT customer.c_identification, customer.c_name, `order`.`order_date`, `order`.`order_id`, order_product.ticket_id, order_product.order_p_comment ";
$query .="FROM (customer INNER JOIN `order` ON customer.c_identification = `order`.`c_identification`) ";
$query .= "INNER JOIN `order_product` ON `order`.`order_id` = `order_product`.`order_id` ";

    
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
                      <th>Name</th>
                      <th>Date</th>
                      <th>Order ID</th>
                      <th>Ticket ID</th>
                      <th>Comment</th>
                    </tr>
                  </thead>
<?php    
//show data        
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["c_name"] . "</td>";
    echo "<td>" . $row["order_date"] . "</td>";
    echo "<td>" . $row["order_id"] . "</td>";
    echo "<td>" . $row["ticket_id"] . "</td>";
    echo "<td>" . $row["order_p_comment"] . "</td>";
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
