<?php include("db.php");?>

<?php
if(isset($_POST["tj"])){
	$name=$_POST["name"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$rpass=$_POST["rpass"];
	if($name==""){
        echo "<script language='javascript'>alert('The username cannot be empty！');</script>";
}elseif($contact==""){
	echo "<script language='javascript'>alert('The contact cannot be empty！');</script>";
}elseif($email==""){
	echo "<script language='javascript'>alert('The email cannot be empty！');</script>";
}elseif($password==""){
	echo "<script language='javascript'>alert('The password cannot be empty！');</script>";
}elseif($rpass==""){
	echo "<script language='javascript'>alert('Make sure password cannot be empty！');</script>";
}else{
      date_default_timezone_set("PRC");
	  $sql="insert into staff(name,contact，email，password,date)values('".$name."','".$contact."','".$email."','".$password."',now())"	;
	  mysqli_query($con,$sql);
	 echo "<script language='javascript'>alert('Registered successfully！');location.href='login_stuff.php';</script>";
}
}

?>
