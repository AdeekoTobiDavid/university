<?php 
//Get value passed from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("login");

//Querry the database for user
$result= mysql_query("select * 	from users where username='$username' and password='$password'") 
			or die ("failed to querry database" . mysql_error());
			
			$row= mysql_fetch_array($result);
			if($row['username']==$username && $row['password']==$password){
				
					echo "<br />Login successful  WELCOME: " ,$row['username'] ;
					
					echo "<br/> student username:" . $row['username'];
					
					echo"<br/> student password:" . $row['password'];
					
					echo "<br/> student id:" . $row['id'];
					
					echo "<br/> student gender:" . $row['gender'];
					
					echo "<br/> student occupation:" . $row['occupation'];
			}else{
				echo "FAILLED TO LOGIN";
			}
			
?>