<?php 
//Get value passed from form in login.php file

$matric = $_POST['matric'];
$code = $_POST['code'];
$level= $_POST['level'];
$course = $_POST['course'];
$semester= $_POST['semester'];
$date = $_POST['date'];
$faculty= $_POST['faculty'];
$dept= $_POST['dept'];
 //to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$matric = mysql_real_escape_string($matric);
$code = mysql_real_escape_string($code);
$level = mysql_real_escape_string($level);
$course = mysql_real_escape_string($course);
$semester = mysql_real_escape_string($semester);
$date = mysql_real_escape_string($date);
$faculty = mysql_real_escape_string($faculty);
$dept = mysql_real_escape_string($dept);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("tmoney");

//Querry the database for user
 
 if(mysql_query("INSERT INTO `tmoney`.`tobi` (`id`, `matric`, `code`,  `level`, `course`,  `semester`, `date`, `faculty`, `dept`) VALUES (NULL, '$matric', '$code', '$level', '$course', '$semester', '$date','$faculty', '$dept');") 
			or die ("failed to querry database" . mysql_error())){
			echo "ACCOUNT CREATED SUCCESSFULLY";
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>