<?php 
require_once('connect.php')	;
$email=$_POST['Email'];
$pass=$_POST['password'];
$sql="select * from users where email='$email' $$ password='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num==1) {
	header('location:index.php');
}else{
	header('location:java.php');
}


 ?>