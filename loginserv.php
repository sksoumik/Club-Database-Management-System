<?php

  $error='';
  if(isset($_POST['submit'])){
  	if(empty($_POST['admin_name'])|| empty($_POST['password'])){
  		$error="Username or Password is Invalid";

  	}
  	else{
  		$admin =$_POST['admin_name'];
  		$password =$_POST['password'];
  		$conn=mysqli_connect("localhost","root","");
  		$db=mysqli_select_db($conn,"dbms_project");
  		$query =mysqli_query($conn,"SELECT * FROM admin_login
  		where password='$password' AND  admin_name='$admin' ");
  		$rows = mysqli_num_rows($query);
  		if($rows==1)
  		{
  			header("Location: admin_panel.php");
  		}
  		else{
  			$error="Username or Password is Invalid";
  		}
  		mysqli_close($conn);


  	}
  }




?>