<?php 
//Get value passed from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];
$gender = $_POST['gen'];
$occupation = $_POST['occ'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$gender = mysql_real_escape_string($gender);
$occupation = mysql_real_escape_string($occupation);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("logins");

//Querry the database for user
 
 if(mysql_query("INSERT INTO `logins`.`tobi` (`id`, `username`, `password`, `gender`, `occupation`) VALUES (NULL, '$username', '$password', '$gender', '$occupation');") 
			or die ("failed to querry database" . mysql_error())){
			echo "ACCOUNT CREATED SUCCESSFULLY";
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>