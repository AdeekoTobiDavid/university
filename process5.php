<?php 
//Get value passed from form in login.php file
$c1 = $_POST['c1'];
$u1 = $_POST['u1'];
$t1 = $_POST['t1'];
$c2 = $_POST['c2'];
$u2 = $_POST['u2'];
$t2 = $_POST['t2'];
$c3 = $_POST['c3'];
$u3 = $_POST['u3'];
$t3 = $_POST['t3'];
$c4 = $_POST['c4'];
$u4 = $_POST['u4'];
$t4 = $_POST['t4'];
$c5 = $_POST['c5'];
$u5 = $_POST['u5'];
$t5 = $_POST['t5'];
$c6 = $_POST['c6'];
$u6 = $_POST['u6'];
$t6 = $_POST['t6'];
$c7 = $_POST['c7'];
$u7 = $_POST['u7'];
$t7 = $_POST['t7'];
$c8 = $_POST['c8'];
$u8 = $_POST['u8'];
$t8 = $_POST['t8'];
$c9 = $_POST['c9'];
$u9 = $_POST['u9'];
$t9 = $_POST['t9'];
$matric = $_POST['matric'];
 //to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$c1 = mysql_real_escape_string($c1);
$u1 = mysql_real_escape_string($u1);
$t1 = mysql_real_escape_string($t1);
$c2 = mysql_real_escape_string($c2);
$u2 = mysql_real_escape_string($u2);
$t2 = mysql_real_escape_string($t2);
$c3 = mysql_real_escape_string($c3);
$u3 = mysql_real_escape_string($u3);
$t3 = mysql_real_escape_string($t3);
$c4 = mysql_real_escape_string($c4);
$u4 = mysql_real_escape_string($u4);
$t4 = mysql_real_escape_string($t4);
$c5 = mysql_real_escape_string($c5);
$u5 = mysql_real_escape_string($u5);
$t5 = mysql_real_escape_string($t5);
$c6 = mysql_real_escape_string($c6);
$u6 = mysql_real_escape_string($u6);
$t6 = mysql_real_escape_string($t6);
$c7 = mysql_real_escape_string($c7);
$u7 = mysql_real_escape_string($u7);
$t7 = mysql_real_escape_string($t7);
$c8 = mysql_real_escape_string($c8);
$u8 = mysql_real_escape_string($u8);
$t8 = mysql_real_escape_string($t8);
$c9 = mysql_real_escape_string($c9);
$u9 = mysql_real_escape_string($u9);
$t9 = mysql_real_escape_string($t9);
$matric = mysql_real_escape_string($matric);
//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("adeeko");


//Querry the database for user
 
 if(mysql_query("INSERT INTO `adeeko`.`tobi` (`id`, `c1`, `u1`, `t1`, `c2`, `u2`, `t2`, `c3`, `u3`, `t3`, `c4`, `u4`, `t4`, `c5`, `u5`, `t5`, `c6`, `u6`, `t6`, `c7`, `u7`, `t7`, `c8`, `u8`, `t8`, `c9`, `u9`, `t9`, `matric`) VALUES (NULL, '$c1', '$u1', '$t1', '$c2', '$u2', '$t2', '$c3', '$u3', '$t3', '$c4', '$u4', '$t4', '$c5', '$u5', '$t5', '$c6', '$u6', '$t6', '$c7', '$u7', '$t7', '$c8', '$u8', '$t8', '$c9', '$u9', '$t9', '$matric');")
	 
			or die ("failed to querry database" . mysql_error())){
			echo "ACCOUNT CREATED SUCCESSFULLY";
			}	else{
			echo"ACCOUNT FAILED TO CREATE";
			}

?>