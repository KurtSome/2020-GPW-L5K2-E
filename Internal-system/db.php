<?php
// 1. Open database connection
$dbhost = "localhost";
$dbuser = "06ddb55aed56";
$dbpass = "f4b1588cb2df1c28";
$dbname = "l5k2e";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>