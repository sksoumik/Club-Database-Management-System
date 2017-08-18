
<?php
 include("loginserv.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>admin_login</title>
	<style type="text/css">
	   .cont{
	   	width: 300px;
	   	margin: 50px auto;
	   	font: Georgia ;
	   	border-radius: 10px;
	   	border:2px solid #ccc;
	   	padding: 10px 40px 25px;
	   	margin-top: 70px;
	   }
	   input[type=text], input[type=password]{
	   	width: 99%;
	   	padding: 10px;
	   	margin-top: 8px;
	   	border:1px solid #ccc;
	   	padding-left: 5px;
	   	font-size: 16px;
	   	font-family: Georgia;
	   }
	   input[type=submit] {
	   	width: 100%;
	   	background-color: #2F4F4F;
	   	color:#fff;
	   border:2px solid #0b0c0d;
	   padding:10px;
	   font-size: 20px;
	   cursor: pointer;
	   border-radius: 5px;
	   margin-bottom: 15px;
	   }
	   .error{
	   	color:red;
	   }

	   #menu ul{
	   	list-style: none;
	font-size: 18px;
	font-family: Georgia;
	text-align: center;


	   }
	   	
	   }	
	

     


	</style>
</head>
<body>
   <h2> Admin Login</h2>
   <div id="menu">
      	<ul>
      	      <li><a href="index.html">Back to home page</a> </li>
      	 </ul>
     </div>


   <div class="cont">
     <form action="" method="POST" style="text-align: center;">
     <input type="text" placeholder="Username" id="admin_name"  name="admin_name"><br/><br/>
     <input type="password" placeholder="Password" id="password" name="password"><br/><br/>
     <input type="submit" value="Login" name="submit">
     <span class="error"><?php echo $error;   ?></span>


   </div>



</body>
</html>