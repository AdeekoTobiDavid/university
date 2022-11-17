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
		echo{color:white; }
		row{color:white; }
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
$reg = $_POST['reg'];
//$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$reg = mysql_real_escape_string($reg);
//$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("payment" );



//Querry the database for user
$result= mysql_query("select * 	from tobi where reg='$reg' ") //and password='$password'
			or die ("failed to querry database" . mysql_error());
			
	
			
			$row= mysql_fetch_array($result);
			if($row['reg']==$reg ){    //&& $row['password']==$password <img src="<?php echo $_SESSION['school'];?">
		
				
					echo "<br /><br/><br/><br/>LOGEN SUCCESSFUL WELCOME: " ,$row['name'] ;
				
					echo "<br/><br/>student reg:" . $row['reg'];
					
			        echo "<br/><br/>student fees:" . $row['school'];
					
				    echo "<br/><br/> student id:" . $row['id'];
					
					echo "<br/><br/> student name:" . $row['name'];
					
					echo "<br/><br/> student guardian:" . $row['guardian'];
					
					echo "<br/><br/> student depositor:" . $row['depositor'];
					
					echo"<br/><br/> student email:" . $row['email'];
					
					echo "<br/><br/> student reg:" . $row['reg'];
					
					echo "<br/><br/> student mobile:" . $row['mobile'];
					
					echo "<br/><br/> student sex:" . $row['sex'];
					
				    echo "<br/><br/> student level:" . $row['level'];
					
					echo "<br/><br/> student date:" . $row['date'];
					
					echo "<br/><br/> student session:" . $row['session'];
					
					echo "<br/><br/> student age:" . $row['age'];
					
					echo"<br/><br/> student faculty:" . $row['faculty'];
					
					echo "<br/><br/> student pay:" . $row['pay'];
					
					echo "<br/><br/> student dept:" . $row['dept'];
					
					echo "<br/><br/> student addy:" . $row['addy'];
					
				    echo "<br/><br/> student amount:" . $row['amount'];
					
					echo "<br/><br/> student branch:" . $row['branch'];
					
					echo "<br/><br/> student type:" . $row['type'];
					
					echo "<br/><br/><br/><img src='image/".$row['school']. "' height='' width=''/>";
					
					echo "<br/><br/><br/><img src='tobi/" . $row['acceptance']. "'>";
					
					echo "<br/><br/><br/><img src='tobi/". $row['deptfees']. "'>";
					
					echo "<br/><br/><br/><img src='tobi/" . $row['facultyfees']. "'>";
			
				   
			}else{
				echo "FAILLED TO LOGIN";
			}

	
?>