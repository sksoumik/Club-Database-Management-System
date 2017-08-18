
<?php
  
   $host="localhost";
   $dbuser="root";
   $pass="";
   $dbname="dbms_project";
   $conn=mysqli_connect($host, $dbuser, $pass,$dbname);
   if (mysqli_connect_errno()) {

   	
   	die("Connection Failed!".mysqli_connect_errno());
   } 
   else{
   	echo "Connected to database {$dbname}";
   }
      
  if(isset($_POST['update'])){

  	$UpdateQuery = "UPDATE member 
  	SET member_id='$_POST[Member_id]', member_fname='$_POST[first_name]',
  	member_lname='$_POST[last_name]',club_id='$_POST[Club_id]',age='$_POST[Age]',
  	address='$_POST[Address]',
  	contact='$_POST[Contact]',email='$_POST[Email]',semester='$_POST[Semester]' "

   $dr= mysqli_query($conn,$UpdateQuery);
   echo "$dr";
  	
  

  
  
    
 
   $sql=" SELECT * FROM member"
   $res=mysqli_query($conn, $sql);
   echo "<table border=1>";  
  <tr>
    
    <th>Member ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Club ID</th>
    <th>Age</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Semester</th>
    
    
   
  </tr>

      while ($row=mysqli_fetch_assoc($res)) {

        echo "<form action=admin_panel.php  method=post>";

        echo "<tr>";

        echo "<td>"."<input type=text name=Member_id value=".$row['member_id']."</td>";

        echo "<td>"."<input type=text name=first_name value=".$row['member_fname']."</td>";

        echo "<td>"."<input type=text name=last_name value=".$row['member_lname']."</td>";

        echo "<td>"."<input type=text name=Club_id value=".$row['club_id']."</td>";

        echo "<td>"."<input type=text name=Age value=".$row['age']."</td>";

        echo "<td>"."<input type=text name=Address value=".$row['address']."</td>";

        echo "<td>"."<input type=text name=Contact value=".$row['contact']."</td>";

        echo "<td>"."<input type=text name=Email value=".$row['email']."</td>";

        echo "<td>"."<input type=text name=Semester value=".$row['semester']."</td>";

        echo "<td>"."<input type=submit name=update value=update"."</td>";

        echo "<?form>";

        echo " </table> ";

        mysqli_free_result($res);

        mysqli_close($conn);


      	
      		} 
      		}              ////// WHILE LOOP ENDS ///////
      	


?>
    
    


