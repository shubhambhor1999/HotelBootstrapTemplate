<?php 
$con=mysqli_connect("localhost","root","","feedback") or die('DATABASE connection failed');
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$message=$_POST['message'];  

$sql="insert into contact (name,email,comment) values('$name','$email','$message')";
$run = mysqli_query($con,$sql);	
if($run == true)
   { 
   header('location:../contact.html');
   }

?>
