<?php
// make db conection
require("logincheck.php");
require('db.php');

$getid = $_GET['id'];

if ($_POST['submit']) {
  $date = $_POST['order_date'];
  $pay = $_POST['order_pay'];
  $cid = $_POST['c_identification'];


  // 2. Do a query
  $query  = "INSERT INTO `order` (`order_date`, `order_pay`, `c_identification`) "; 
  $query .= "VALUES ('$date', '$pay', '$cid') ";


  $result = mysqli_query($connection, $query);
  header('location: order-ticket.php');
}

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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="customer-system.php">Chengdu Bus Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="customer-system.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-ticket.php">My Tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My meal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Header - set the background image for the header in the line below -->
  <div class="container-fluid">

          <!-- Page Heading -->
        <div>
        <h1 class="hszs1">Order Form</h1>
        </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="">Type Information</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <form class="row1" action="order-form.php" method="post">
                 <br>Order Date: <input type="date" name="order_date">
                 <br>Pay Way: <input type="text" name="order_pay">
                 <br>Customer ID: <input type="text" name="c_identification">
                 <br><input class="btn btn-default" type="submit" name="submit">
                  </form>
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
