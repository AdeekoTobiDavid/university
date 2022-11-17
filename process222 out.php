<?php 
//Get value passed from form in login.php file

$matric = $_POST['matric'];
$s_o_o = $_POST['s_o_o'];
$s_name = $_POST['s_name'];
$lga = $_POST['lga'];
$o_name = $_POST['o_name'];
$year_of_admission = $_POST['year_of_admission'];
$sx = $_POST['sx'];
$lvl= $_POST['lvl'];
$dob = $_POST['dob'];
$sessions = $_POST['sessions'];
$age= $_POST['age'];
$fac = $_POST['fac'];
$phone = $_POST['phone'];
$dept= $_POST['dept'];
$addy= $_POST['addy'];
$passd= $_POST['passd'];

//to prevent mysql inection

$matric = mysql_real_escape_string($matric);
$s_o_o = mysql_real_escape_string($s_o_o);
$s_name = mysql_real_escape_string($s_name);
$lga= mysql_real_escape_string($lga);
$o_name  = mysql_real_escape_string($o_name  );
$year_of_admission = mysql_real_escape_string($year_of_admission);
$sx= mysql_real_escape_string($sx);
$lvl = mysql_real_escape_string($lvl);
$dob = mysql_real_escape_string($dob);
$sessions = mysql_real_escape_string($sessions);
$age = mysql_real_escape_string($age);
$fac = mysql_real_escape_string($fac);
$phone = mysql_real_escape_string($phone);
$dept = mysql_real_escape_string($dept);
$addy = mysql_real_escape_string($addy);
$passd = mysql_real_escape_string($passd);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("index");

//Querry the database for user
 
if(mysql_query("INSERT INTO `index`.`users` (`id`,'matric','s_o_o','s_name','lga','o_name ','year_of_admission','sx','lvl','dob','sessions','age ','fac','phone','dept','addy','passd') VALUES (NULL,'$matric','$s_o_o','$s_name','$lga','$o_name ','$year_of_admission','$sx','$lvl','$dob','$sessions','$age ','$fac','$phone','$dept','$addy','$passd');")
	 	or die ("failed to querry database" . mysql_error())){
			echo "ACCOUNT CREATED SUCCESSFULLY";
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>