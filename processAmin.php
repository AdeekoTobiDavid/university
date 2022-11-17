<?php 
require_once("included_functions.php");
require_once("validation_functions.php"); 
//Get value passed from form in login.php file
$username = $_POST['username'];
$passward = $_POST['passward'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$username = mysql_real_escape_string($username);
$passward = mysql_real_escape_string($passward);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("staff");

//Querry the database for user
$result= mysql_query("select * 	from tobi where username='$username' and passward='$passward'") 
			or die ("failed to querry database" . mysql_error());
		
			$row= mysql_fetch_array($result);
			if($row['username']==$username && $row['passward']==$passward){
						redirect_to("background.php") ;
			}else{
				echo "FAILLED TO LOGIN";
			}
?><!--	echo "Login successful  WELCOME" , $row['username'];