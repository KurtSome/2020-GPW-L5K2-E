<?php
error_reporting(0); 
require_once('db.php');

if (isset($_POST['submit'])) {
    $id = $_POST[ticket_id];
    $ticket_level = $_POST[ticket_level];
    $ticket_price = $_POST[ticket_price];
    $ticket_information = $_POST[ticket_information];
    $bus_id = $_POST[bus_id];

    $query  = "INSERT INTO ticket (ticket_level, ticket_price, ticket_information, bus_id) ";
    $query .= "VALUES ('$ticket_level', '$ticket_price', '$ticket_price',  '$bus_id') ";

    echo $query;

    mysqli_query($connection, $query);

    header('Location: ticket.php');
}

?>

    <form action="addticket.php" method="post">
        Level: <input type="text" name="ticket_level">
        Price: <input type="text" name="ticket_price">
        Information: <input type="text" name="ticket_information">
        Bus: <input type="text" name="bus_id">
        <input type="submit" name="submit">
    </form>

<?php

mysqli_close($connection);

?>