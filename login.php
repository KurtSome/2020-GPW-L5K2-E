<?php

require('db.php');

if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "username or password is empty";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query  = "SELECT username, password ";
    $query .= "FROM manager ";
    $query .= "WHERE username = '$username' AND password = '$password' ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("query is wrong");
    }

    $row = mysqli_fetch_array($result);


    $numrows=mysqli_num_rows($result);
    if ($numrows == 1) {
        session_start();

        $_SESSION['login_user'] = $username;
        header('location:index.php');
    } else if($numrows == 0){
        $error = 'username or password is wrong';
    }


        mysqli_free_result($result);
    }
}


mysqli_close($connection);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="main">
    <div class="login">
        <div class="logo">
            CBC information management system
            <?php
            if (isset($error)){
                echo "<p style='text-align: center; font-size: 20px;color: red;' >" . $error . "</p>";

            }
            ?>
        </div>
        <form action="login.php" method="POST">
            <h1><label>Username:</label></h1>
            <input type="text" name="username" placeholder="Please input your username">
            <h1><label>Password:</label></h1>
            <input type="password" name="password" placeholder="Please input your password">
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</div>
    <style>
        body{
    margin: 0;
    padding: 0;
    background-image: url(http://img4.99114.com/group10/M00/17/7F/rBADs1zeNvCAQdPPAAMae8eJLWE890.jpg)
}</style>
</body>
</html>