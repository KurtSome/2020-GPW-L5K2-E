<?php

require_once('db.php');

//Do a query
$query = "SELECT * FROM order ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die ("query is wrong");
}


?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <td>Date</td>
                  <td>Pay</td>
                  <td>Identification</td>
                  <td>Delete</td>
                  </thead>

<?php
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["order_date"] . "</td>";
    echo "<td>" . $row["order_pay"] . "</td>";
    echo "<td>" . $row["c_identification"] . "</td>";
    echo "<td><a href='deleteorder.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
}
 ?>

                </table>


              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Bootstrap core JavaScript-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="assets/js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="assets/js/demo/datatables-demo.js"></script>

<?php

mysqli_close($connection);

?>