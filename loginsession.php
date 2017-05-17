<?php
	session_start();
	
	$con = mysqli_connect("localhost","root","root","demo_db");

	
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$res=mysqli_query($con,"select * from `user` where  `username`='".$username."' and  `password`='".$password."'",$l);
	
	if(mysql_num_rows($res)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:reservation.php");
		exit();		 
	}
	else
	{
	      header("location:login.php");
		  exit();
	}
	
?>