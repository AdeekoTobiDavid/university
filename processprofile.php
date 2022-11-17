<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">
body {
		background:url('image/blue.jpg');
		}
		h2{color:green; }
		em{color:red; font-size:15pt; font-weight:bold; text-align:left; }	
		a{color:white; }
		p{color:white; }
</style>

</head>

<body  >
<div align="center"> 
<table  width="1350" bgcolor="white"><tr><th><img src="image/6.jpg" align="left" width="100" height="100"/> <h2>NATIONAL OPEN UNIVERSITY OF NIGERIA</h2></th><th align="left"> <em align="left"> &nbsp&nbsp&nbsp&nbsp&nbsp<br /><br />...work and learn</em><br /> </th></table><br /><br /><br />

   <table  bgcolor="red" width="1350" height="40" colspan="4"  class="green" >
      <tr>
        <td colspan="4"  class="red" bgcolor="red">
		<strong><p> <a href="http://dailypost.ng">Daily Post - Nigeria News, Nigerian Newspapers</a>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		<a href="http://vanguardngr.com">Vanguard News: Home</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		<a href="background.php">homepage</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		<a href="ABOUT US.php">ABOUT US</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		<a href="homepage.php">REGISTER</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		<a href="MAP OF NOUN LOCATIONS.php">MAP OF NOUN LOCATIONS</a>
		</p></strong></td>
      </tr>
    </table><br/><br />
   




<?php


 
//Get value passed from form in login.php file
$passward = $_POST['passward'];
//$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$passward = mysql_real_escape_string($passward);
//$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("staff" );



//Querry the database for user
$result= mysql_query("select * 	from tobi where passward='$passward' ") //and password='$password'
			or die ("failed to querry database" . mysql_error());
			
	
			
			$row= mysql_fetch_array($result);
			if($row['passward']==$passward ){    //&& $row['password']==$password
		
				
					echo "<br /><br />LOGEN SUCCESSFUL WELCOME: " ,$row['name'] ;
					
					echo "<br/> staff id:" . $row['id'];
					
					echo" <br/>staff name:" . $row['name'];
					
				    echo "<br/> staff password:" . $row['passward'];
					
					echo "<br/> staff sex:" . $row['sex'];
					
					echo "<br/> staff position:" . $row['position'];
					
					echo "<br/> staff occupation:" . $row['occupation'];
					
					echo"<br/> staff department:" . $row['department'];
					
					echo "<br/> staff faculty:" . $row['faculty'];
					
					
			
				   
			}else{
				echo "FAILLED TO LOGIN";
			}

	
?>