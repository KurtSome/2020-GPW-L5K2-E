<?php
// make db conection
require('db.php');
include('customer-system-header.html');

$getid = $_GET['id'];

$query = "SELECT ticket_id, ticket_level, ticket_price, ticket_information ";
$query .="FROM ticket ";
$query .= "WHERE bus_id = $getid ";

    
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
        <h1 class="hszs1">Tickets Level</h1>
        
        
        
        </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="">Choose one you want</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Level</th>
                      <th>Price</th>
                      <th>Information</th>
                      <th> </th>
                    </tr>
                  </thead>
<?php    
//show data        
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["ticket_id"] . "</td>";
    echo "<td>" . $row["ticket_level"] . "</td>";
    echo "<td>" . $row["ticket_price"] . "</td>";
    echo "<td>" . $row["ticket_information"] . "</td>";
    echo "<td><a href='customerdetail.php?id=" . $row["ticket_id"] . "'>Next</a></td>";
    echo "</tr>";
}
          
?>
                  </table>
              </div>
            </div>
          </div>

        </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
            
mysqli_close($connection);

?>      