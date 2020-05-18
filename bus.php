<?php
require("includes/logincheck.php");
require("includes/db.php");

//Do a query
$sql = "SELECT id, type, state FROM bus";

$query = mysqli_query($connection, $sql);

if (!$query) {
    die ("query is wrong");
}

include("includes/header.php");

if (isset($_GET['sub']))
{
    $ids=$_GET['checkbox'];
    $tmp=implode(',',$ids);
    echo $sql ="delete from employee where sid=".$tmp;
    $query=mysqli_query($conn, $sql);
    if($query)
        echo 'delete sucess';
    else
        echo 'delete failed';
}
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Employees</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <td>   </td>
                      <td>type</td>
                      <td>state</td>
                      <td>Update</td>
                      <td>Delete</td>
                  </thead>

<?php
while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td><input name=sel type='checkbox' class='emp_id' value=' '/></td>";
    echo "<td>" . $row["type"] . "</td>";
    echo "<td>" . $row["state"] . "</td>";
    echo "<td><a href='updateemployees.php?emp_id=" . $row['emp_id'] . "'>Update</a></td>";
    echo "<td><a href='deleteemployees.php?emp_id=" . $row['emp_id'] . "'>Delete</a></td>";
    echo "</tr>";
}
 ?>  

                </table>

<a href="addbus.php">Add a new bus</a>
 
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="js/demo/datatables-demo.js"></script>
