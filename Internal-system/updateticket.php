<?php

error_reporting(0);
require_once('db.php');

if (isset($_POST['submit'])) {
    $id = $_POST['ticket_id'];
    $ticket_level = $_POST['ticket_level'];
    $ticket_price = $_POST['ticket_price'];
    $ticket_information = $_POST['ticket_information'];
    $bus_id = $_POST['bus_id'];

    $query  = "UPDATE ticket SET ticket_level = '$ticket_level', ticket_price= '$ticket_price', ticket_information = '$ticket_information', bus_id= '$bus_id'";
    $query .= "WHERE ticket_id = $id";



    mysqli_query($connection, $query);

    header('location: ticket.php');
}

$id = $_GET['id'];

$query  = "SELECT * FROM ticket ";
$query .= "WHERE ticket_id = $id";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);


?>

    <form action="updateticket.php" method="post">
        <input type="hidden" name="ticket_id" value="<?php echo $id; ?>">
        Type: <input type="text" name="ticket_level" value="<?php echo $row["ticket_level"]; ?>"><br/>
        Price: <input type="text" name="ticket_price" value="<?php echo $row["ticket_price"]; ?>"><br/>
        Information: <input type="text" name="ticket_information" value="<?php echo $row["ticket_information"]; ?>"><br/>
        Bus: <input type="text" name="bus_id" value="<?php echo $row["bus_id"]; ?>"><br/>
        <input type="submit" name="submit" value="submit">
    </form>

