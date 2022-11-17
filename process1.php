<?php 
require_once("included_functions.php");
require_once("validation_functions.php"); 
//Get value passed from form in login.php file
$matric = $_POST['matric'];
$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$matric = mysql_real_escape_string($matric);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("logins");

//Querry the database for user
$result= mysql_query("select * 	from tobi where matric='$matric' and password='$password'") 
			or die ("failed to querry database" . mysql_error());
		
			$row= mysql_fetch_array($result);
			if($row['matric']==$matric && $row['password']==$password){
						redirect_to("background.php") ;
			}else{
				echo "FAILLED TO LOGIN";
			}
?><!--	echo "Login successful  WELCOME" , $row['username'];