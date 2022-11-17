<?php

//Get value passed from form in login.php file
//$name = $_POST['name'];
$id = $_POST['id'];
$city = $_POST['city'];
$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
//$name = mysql_real_escape_string($name);
$id = mysql_real_escape_string($id);
$city = mysql_real_escape_string($city);
$password= mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("video");

//Querry the database for user
 
 if(mysql_query("INSERT INTO `video`.`student` (`id`,`city`, `password`) VALUES (NULL, '$id','$city', '$password');") 
			or die ("failed to querry database" . mysql_error())){
			echo "ACCOUNT CREATED SUCCESSFULLY";
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>