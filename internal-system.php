<?php
// make db conection
require('db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="0;url=dist/index.html">
    <div class="header">
    <title>Internal System</title>
    </div>
    <meta charset="utf-8">
            
            <style>
                .header {
    width:100%;
    height:200px;
    background-color:#272727;
    margin-top:-50px;
    opacity:0.6;

}
.nav-bar li {
    list-style-type:none;
    font-size:40px;
    text-decoration: none;
    float:left;
    padding:75px;
    padding-left:180px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

}

.nav-bar li a {
    text-decoration: none;
    color:#ffffff;
    
}

.nav-bar li a:hover{
    border-bottom: solid 4px #ffffff;
    font-size:50px;

}
    <script language="javascript">
        window.location.href = "dist/index.html"
    </script>
</head>
    <div class="container-box">
                    <ul class="nav-bar">
                        <li><a href="1.php">Employees</a></li>
                        <li><a href="2.php">111</a></li>
                        <li><a href="3.php">111</a></li>
                        <li><a href="4.php">111</a></li>
</div>

<body>
    Go to <a href="dist/index.html">/dist/index.html</a>
</body>

</html>

<?php
            
mysqli_free_result($result);
mysqli_close($connection);

?>  
