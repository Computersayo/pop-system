<?php
require_once('connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['message'];	

$query="insert into msg(name,email,subject,message) values('$name','$email','$subject','$msg')";
mysqli_query($conn,$query);
header('location:index.php');
echo "message sent successfully";



 ?>