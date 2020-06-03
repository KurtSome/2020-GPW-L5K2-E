<?php
require("includes/logincheck.php");
require("includes/db.php");


//Post
if (isset($_POST['submit'])) {
  $id = $_POST['cus_id'];
  $first_name = $POST['first_name'];
  $last_name = $POST['last_name'];
  $phone_no = $POST['phone_no'];
  $address = $POST['address'];

$query  = "UPDATE customer SET first_name = '$first_name', last_name = '$last_name', phone_no = '$phone_no', address = '$address' WHERE cus_id = '$id'";
$result = mysqli_query($connection, $query);

header("Location: customers.php");

}

$updateid = $_GET['cus_id'];

$query = "SELECT * FROM customer WHERE cus_id = '$updateid'";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

include("includes/header.php");

?>

<form action="updatecustomers.php" method="post">
    <input type="hidden" name="cus_id" value="<?php echo $row['cus_id']; ?>">
    First Name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br/>
    Last Name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br/>
    Phone Number: <input type="text" name="phone_no" value="<?php echo $row['phone_no']; ?>"><br/>
    Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br/>
    <input type="submit" name="submit">

</form>

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

<?php
  include("includes/footer.php");
?>
