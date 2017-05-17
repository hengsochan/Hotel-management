<?php
	$con = mysqli_connect("localhost","root","root","demo_db");
    $username=$_POST['username'];
	$password=$_POST['password'];
	
	
	mysqli_query ($con,"INSERT INTO `user`
	(`username`,`password`)VALUES
	('$username',
	'$password');",$l);
	header("location:login.php?flag=1");
	
?>
