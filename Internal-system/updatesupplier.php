<?php

error_reporting(0); 
require("includes/logincheck.php");
require("includes/db.php");

if (isset($_POST[submit])) {
    $id = $_POST[sup_id];
    $sup_name = $_POST[sup_name];
    $contact_no = $_POST[contact_no];
    $address = $_POST[address];


    $query  = "UPDATE supplier SET sup_name = '$sup_name', contact_no= '$contact_no', address = '$address'";
    $query .= "WHERE id = $id";



    mysqli_query($connection, $query);

    header('location: supplier.php');
}

$id = $_GET[id];

$query  = "SELECT * FROM supplier ";
$query .= "WHERE sup_id = $id";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);


?>

    <form action="updatestaffs.php" method="post">
        <input type="hidden" name="sup_id" value="<?php echo $id; ?>">
        Supplier Name: <input type="text" name="sup_name" value="<?php echo $row["sup_name"]; ?>"><br/>
        Contact Number: <input type="text" name="contact_no" value="<?php echo $row["contact_no"]; ?>"><br/>
        Address: <input type="text" name="address" value="<?php echo $row["address"]; ?>"><br/>
        <input type="submit" name="submit" value="submit">
    </form>

