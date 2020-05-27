<?php
// make db conection
require("logincheck.php");
require('db.php');
include('customer-system-header.php');

$query = "SELECT bus_id, bus_started, bus_end, bus_comment ";
$query .="FROM bus ";
            
    
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
        <h1 class="hszs1">Tickets</h1>
        
        
        
        </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="">Bus Lines</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Origin Station</th>
                      <th>End Station</th>
                      <th>Information</th>
                      <th> </th>
                    </tr>
                  </thead>
<?php    
//show data        
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["bus_id"] . "</td>";
    echo "<td>" . $row["bus_started"] . "</td>";
    echo "<td>" . $row["bus_end"] . "</td>";
    echo "<td>" . $row["bus_comment"] . "</td>";
    echo "<td><a href='information-ticket.php?id=" . $row["bus_id"] . "'>Order</a></td>";
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
