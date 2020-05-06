<?php include("db.php");?>
	<?php
if(isset($_POST["tj"])){
	$email=$_POST["email"];
	$password=$_POST["password"];
	if($email==""){
        echo "<script language='javascript'>alert('The email cannot be empty!！');</script>";
}elseif($password==""){
	echo "<script language='javascript'>alert('The password cannot be empty!');</script>";}else{
		$sql="select * from staff where email='".$email."'and password ='".$password."'";
		$query=mysqli_query($con,$sql);
		$num=mysqli_num_rows($query);
		if($num==0){
		echo "<script language='javascript'>alert('Error entering email and password');</script>";
		}else{
			$_SESSION["email"]=$email;
			echo "<script language='javascript'>alert('Successful landing！');location.href='index.html';</script>";
			}
	  }
}
?>
