<?php

require_once("included_functions.php");
require_once("validation_functions.php"); 

 
//Get value passed from form in login.php file
$name = $_POST['name'];
$sex = $_POST['sex'];
$faculty = $_POST['faculty'];
$department= $_POST['department'];
$position = $_POST['position'];
$occupation= $_POST['occupation'];
$username = $_POST['username'];
$passward= $_POST['passward'];
 //to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$name = mysql_real_escape_string($name);
$sex = mysql_real_escape_string($sex);
$faculty = mysql_real_escape_string($faculty);
$department = mysql_real_escape_string($department);
$position = mysql_real_escape_string($position);
$occupation = mysql_real_escape_string($occupation);
$passward = mysql_real_escape_string($passward);
$username = mysql_real_escape_string($username);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("staff");

//Querry the database for user
 
 if(mysql_query("INSERT INTO `staff`.`tobi` (`id`, `name`, `sex`, `faculty`, `department`, `position`, `occupation`, `passward`, `username`) VALUES (NULL, '$name', '$sex', '$faculty', '$department', '$position', '$occupation', '$passward', '$username');") 
			or die ("failed to querry database" . mysql_error())){
			//echo "ACCOUNT CREATED SUCCESSFULLY";
			// successful login
				redirect_to("Adminhomepage.php");
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>