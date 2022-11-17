<?php

require_once("included_functions.php");
require_once("validation_functions.php"); 

 
//Get value passed from form in login.php file
$name = $_POST['name'];
$guardian= $_POST['guardian'];
$depositor = $_POST['depositor'];
$email= $_POST['email'];
$reg = $_POST['reg'];
$mobile= $_POST['mobile'];
$sex = $_POST['sex'];
$level= $_POST['level'];
$date = $_POST['date'];
$session = $_POST['session'];
$age = $_POST['age'];
$faculty= $_POST['faculty'];
$pay = $_POST['pay'];
$dept= $_POST['dept'];
$addy = $_POST['addy'];
$amount= $_POST['amount'];
$branch= $_POST['branch'];
$type= $_POST['type'];
$school = $_FILES['school'];
$acceptance= $_FILES['acceptance'];
$deptfees = $_FILES['deptfees'];
$facultyfees= $_FILES['facultyfees'];



 //to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$name = mysql_real_escape_string($name);
$guardian = mysql_real_escape_string($guardian);
$depositor = mysql_real_escape_string($depositor);
$email = mysql_real_escape_string($email);
$reg = mysql_real_escape_string($reg);
$mobile = mysql_real_escape_string($mobile);
$sex = mysql_real_escape_string($sex);
$level = mysql_real_escape_string($level);
$date = mysql_real_escape_string($date);
$session = mysql_real_escape_string($session);
$age = mysql_real_escape_string($age);
$faculty = mysql_real_escape_string($faculty);
$pay = mysql_real_escape_string($pay);
$dept = mysql_real_escape_string($dept);
$addy = mysql_real_escape_string($addy);
$amount = mysql_real_escape_string($amount);
$branch = mysql_real_escape_string($branch);
$type = mysql_real_escape_string($type);
$school = mysql_real_escape_string($school);
$acceptance = mysql_real_escape_string($acceptance);
$deptfees = mysql_real_escape_string($deptfees);
$facultyfees = mysql_real_escape_string($facultyfees);
//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("payment");

//Querry the database for user
 
 if(mysql_query("INSERT INTO `payment`.`tobi` (`id`, `name`, `guardian`, `depositor`, `email`, `reg`, `mobile`, `sex`, `level`, `date`, `session`, `age`, `faculty`, `pay`, `dept`, `addy`,`amount`, `branch`, `type`, `school`, `acceptance`, `deptfees`,`facultyfees`) VALUES (NULL, '$name', '$guardian', '$depositor', '$email', '$reg', '$mobile', '$sex', '$level','$date', '$session', '$age', '$faculty', '$pay', '$dept', '$addy','$amount', '$branch', '$type', '$school', '$acceptance', '$deptfees','$facultyfees');") 
			or die ("failed to querry database" . mysql_error())){
			//echo "ACCOUNT CREATED SUCCESSFULLY";
			// successful login
				redirect_to("regcourse.php");
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>
