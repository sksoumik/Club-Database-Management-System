<?php

$link=mysqli_connect("localhost", "root","");
mysqli_select_db($link,"dbms_project");

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin_panel</title>
	<style type="text/css">
		#admin_panel_design{
			margin-top:2px; 
            margin-left:550px;
            text-align: center;
            
            

		}
		table tr td{
			 border: 1px solid black;
    border-collapse: collapse;

		}
		table tr {
    background-color: rgba(18, 120, 98, 1);
    color: white;
    width: 100px;
}
		
		#txt{
			text-align: center;
			list-style: none;
		}
		h2{
			text-align: center;
		}
		#box{

    background-color: ;
    width: 600px;
    height: 60px;
    border: 15px solid rgba(18, 120, 98, 1);

    padding: 25px;
    margin: 25px;
    margin-left:350px;

}
	</style>
</head>
<body>
<h2>ADMIN PANEL</h2>


<form name="form1" action="" method="post">
<table id="admin_panel_design">
<tr>
	<td>Insert member_id:</td>
	<td><input type="text" name="t1"></td>
</tr> 
<tr>
	<td>Insert first name:</td>
	<td><input type="text" name="t2"></td>
</tr> 
<tr>
	<td>Insert last name:</td>
	<td><input type="text" name="t3"></td>
</tr>
<tr>
	<td>Insert club_id:</td>
	<td><input type="text" name="t4"></td>
</tr>
<tr>
	<td>Insert age:</td>
	<td><input type="text" name="t5"></td>
</tr><br/>
<tr>
	<td>Insert address:</td>
	<td><input type="text" name="t6"></td>
</tr>
<tr>
	<td>Insert contact:</td>
	<td><input type="text" name="t7"></td>
</tr>
<tr>
	<td>Insert email:</td>
	<td><input type="text" name="t8"></td>
</tr>
<tr>
	<td>Insert semester:</td>
	<td><input type="text" name="t9"></td>
</tr>
<tr>
	<td colspan="5" align="center"> 
	<input type="submit" name="submit1" value="insert" > 
	<input type="submit" name="submit2" value="delete" > 
	<input type="submit" name="submit3" value="search" >


	</td>
	
</tr>
</table>
</form>
<div id="box">
<ul>
	<li>For inserting a new member insert data in all boxes and click insert</li>
	<li>For deleting a member insert member_id in the first box and click delete</li>
	<li>For searching a member insert member_id or last name and click search</li>
</ul>
</div>
	


<?php

 if(isset($_POST["submit1"]))
 {
 	mysqli_query($link,"INSERT into member values ('$_POST[t1]','$_POST[t2]','$_POST[t3]',
 		'$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]') ");
 }


 if(isset($_POST["submit2"]))
 {
 	mysqli_query($link,"DELETE FROM member where member_id='$_POST[t1]' ");
 }


 if(isset($_POST["submit3"]))
 {

 	$res = mysqli_query($link,"SELECT * from member where member_id='$_POST[t1]' or member_lname='$_POST[t3]' ");
 	echo "<table border=1 >";
 	echo "<tr>";
 	echo "<td>"; echo "MEMBER ID"; echo "</td>";
 	echo "<td>"; echo "FIRST NAME"; echo "</td>";
 	echo "<td>"; echo "LAST NAME"; echo "</td>";
 	echo "<td>"; echo "CLUB ID"; echo "</td>";
 	echo "<td>"; echo "AGE"; echo "</td>";
 	echo "<td>"; echo "ADDRESS"; echo "</td>";
 	echo "<td>"; echo "CONTACT"; echo "</td>";
 	echo "<td>"; echo "EMAIL"; echo "</td>";
 	echo "<td>"; echo "SEMESTER"; echo "</td>";

    echo "</tr>";

    while ($row =mysqli_fetch_array($res))
     {
     	echo "<tr>";
    echo "<td>"; echo $row['member_id'] ; echo "</td>";
 	echo "<td>"; echo $row['member_fname']; echo "</td>";
 	echo "<td>"; echo $row['member_lname']; echo "</td>";
 	echo "<td>"; echo $row['club_id']; echo "</td>";
 	echo "<td>"; echo $row['age']; echo "</td>";
 	echo "<td>"; echo $row['address']; echo "</td>";
 	echo "<td>"; echo $row['contact']; echo "</td>";
 	echo "<td>"; echo $row['email']; echo "</td>";
 	echo "<td>"; echo $row['semester']; echo "</td>";

       echo "</tr>";
    }

    echo "</table>";
}


 	?>


</body>
</html>