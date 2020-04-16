<?php 
require_once('connect.php');
if (isset($_POST) and $_SERVER['REQUEST_METHOD']=="POST") {
$first=$_POST['Firstname'];
$last=$_POST['Lastname'];
$email=$_POST['Email'];
$phone=$_POST['phonenumber'];
$pass=$_POST['password'];
$dpass=md5($pass);
$sql="select * from users where email='$email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num==1) {
		echo "user already used ";
	}else{
		$Query="insert into users (Firstname,Lastname,Email,phonenumber,password) values(?,?,?,?,?)";
		$prepare=$conn->prepare($Query);
		$prepare->bind_param('sssss',$first,$last,$email,$phone,$pass);
		if ($check=$prepare->execute()) {
			echo " <div class='alert alert-success'> inserted successfully </div>";
		}else{
			echo " <div class='alert alert-danger'> Error occured </div>";
		}
		
	}
	}	






 ?>