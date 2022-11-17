<?php
//Get value passed from form in login.php file
$surname = $_POST['surname'];
$matric = $_POST['matric'];
$othername = $_POST['othername'];
$yoa= $_POST['yoa'];
$sex = $_POST['sex'];
$level= $_POST['level'];
$state = $_POST['state'];
$lga= $_POST['lga'];
$date = $_POST['date'];
$session = $_POST['session'];
$age = $_POST['age'];
$faculty= $_POST['faculty'];
$phone = $_POST['phone'];
$dept= $_POST['dept'];
$addy = $_POST['addy'];
$password= $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$surname = mysql_real_escape_string($surname);
$matric = mysql_real_escape_string($matric);
$othername = mysql_real_escape_string($othername);
$yoa = mysql_real_escape_string($yoa);
$sex = mysql_real_escape_string($sex);
$level = mysql_real_escape_string($level);
$state = mysql_real_escape_string($state);
$lga = mysql_real_escape_string($lga);
$date = mysql_real_escape_string($date);
$session = mysql_real_escape_string($session);
$age = mysql_real_escape_string($age);
$faculty = mysql_real_escape_string($faculty);
$phone = mysql_real_escape_string($phone);
$dept = mysql_real_escape_string($dept);
$addy = mysql_real_escape_string($addy);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("logins");

//Querry the database for user
 if(mysql_query("INSERT INTO `logins`.`tobi` (`id`, `username`, `password`, `gender`, `occupation`) VALUES (NULL, '$username', '$password', '$gender', '$occupation');") 
			or die ("failed to querry database" . mysql_error())){
			// successful login
				redirect_to("index.php");
			} else {
				$message = "Username/password do not match.";
			}

?><!--echo "ACCOUNT CREATED SUCCESSFULLY";
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}-->