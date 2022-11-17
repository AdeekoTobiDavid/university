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

   <table  bgcolor="red"width="1000" height="5">
      <tr>
        <td colspan="4"  class="red" bgcolor="blue"><strong><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp WeLCOME TO THE FIRST LEVEL STUDENT REGISTRATION</p></strong></td>
      </tr>
    </table>




<?php


 
//Get value passed from form in login.php file
$matric = $_POST['matric'];
//$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$matric = mysql_real_escape_string($matric);
//$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("logins" );



//Querry the database for user
$result= mysql_query("select * 	from tobi where matric='$matric' ") //and password='$password'
			or die ("failed to querry database" . mysql_error());
			
	
			
			$row= mysql_fetch_array($result);
			if($row['matric']==$matric ){    //&& $row['password']==$password
		
				
					echo "<br />LOGEN SUCCESSFUL WELCOME: " ,$row['surname'] ;
					
					echo "<br/><br/><br/> student matric:" . $row['matric'];
					
					echo" <br/>student password:" . $row['password'];
					
				    echo "<br/> student id:" . $row['id'];
					
					echo "<br/> student date:" . $row['date'];
					
					echo "<br/> student state:" . $row['state'];
					
					echo "<br/> student name:" . $row['surname'];
					
					echo"<br/> student password:" . $row['othername'];
					
					echo "<br/> student year of admission:" . $row['yoa'];
					
					echo "<br/> student sex:" . $row['sex'];
					
					echo "<br/> student level:" . $row['level'];
					
				    echo "<br/> student local govt area:" . $row['lga'];
					
					echo "<br/> student session:" . $row['session'];
					
					echo "<br/> student age:" . $row['age'];
					
					echo "<br/> student faculty:" . $row['faculty'];
					
					echo"<br/> student phone:" . $row['phone'];
					
					echo "<br/> student department:" . $row['dept'];
					
					echo "<br/> student address:" . $row['addy'];
					
			
				   
			}else{
				echo "FAILLED TO LOGIN";
			}

	
?>
		
			
<br/><br/>
				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">

</style>

</head>


<div align="center"> 

    <table  bgcolor="red"width="1000" height="5">
      <tr>
        <td colspan="4"  class="red" bgcolor="blue"><strong><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp WeLCOME TO THE 2rd LEVEL EXAM REGISTRATION</p></strong></td>
      </tr>
    </table>

	
	
	</div>
 
	</body>
</html>
	

<br/><br/><br/>
	
<?php			
			
//Get value passed from form in login.php file
$matric = $_POST['matric'];
//$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$matric = mysql_real_escape_string($matric);
//$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("tmoney" );



//Querry the database for user
$result= mysql_query("select * 	from tobi where matric='$matric' ") //and password='$password'
			or die ("failed to querry database" . mysql_error());
			
	
			
			$row= mysql_fetch_array($result);
			if($row['matric']==$matric ){    
			
			
			        
					
				    echo"<br/><br/><br/> matric:" . $row['matric'];
					
					echo "<br/> student level:" . $row['level'];
					
					echo "<br/> student Department:" . $row['dept'];
					
					echo "<br/> student Date Reg:" . $row['date'];
					
					echo "<br/> student Exam code:" . $row['code'];
					
					echo "<br/> student No of Courses:" . $row['course'];
					
					echo "<br/> student Semester:" . $row['semester'];
					
					echo "<br/> student Faculty:" . $row['faculty'];
					
				    echo "<br/>" ;
					echo "<br/>" ;
					
				   
				   
			}else{
				echo "FAILLED TO LOGIN";
			}
			
			
			
			
			
?>	

			

				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">

</style>

</head>


<div align="center"> 
 
    <table  bgcolor="red"width="1000" height="5">
      <tr>
        <td colspan="4"  class="red" bgcolor="BLUE"><strong><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp WeLCOME TO THE 3rd LEVEL COURSE REGISTRATION</p></strong></td>
      </tr>
    </table>

	
	
	</div>
 
	</body>
</html>
	

<br/><br/><br/>
	
<?php			
			
//Get value passed from form in login.php file
$matric = $_POST['matric'];
//$password = $_POST['password'];

//to prevent mysql inection
//$username = stripeslashers($username);
//$password = stripeslashers($password);
$matric = mysql_real_escape_string($matric);
//$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("adeeko" );



//Querry the database for user
$result= mysql_query("select * 	from tobi where matric='$matric' ") //and password='$password'
			or die ("failed to querry database" . mysql_error());
			
	
			
			$row= mysql_fetch_array($result);
			if($row['matric']==$matric ){    
			
					
				    echo"<br/><br/><br/> matric:" . $row['matric'];           
					
					echo "<br/> student COURSE CODE:" . $row['c1'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u1'];
					
					echo "<br/> student STATUS:" . $row['t1'];
					
					echo "<br/> student  COURSE CODE:" . $row['c2'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u2'];
					
					echo "<br/> student STATUS:" . $row['t2'];
					
					echo "<br/> student  NO. OF UNITS:" . $row['c3'];
					
					echo "<br/> student Semester:" . $row['u3'];
					
					echo "<br/> student STATUS:" . $row['t3'];
					  
					echo "<br/> student  COURSE CODE:" . $row['c4'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u4'];
					
					echo "<br/> student STATUS:" . $row['t4'];
					
					echo "<br/> student  COURSE CODE:" . $row['c5'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u5'];
					
					echo "<br/> student STATUS:" . $row['t5'];
					
					echo "<br/> student  COURSE CODE:" . $row['c6'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u6'];
					
					echo "<br/> student STATUS:" . $row['t6'];   
					  
					echo "<br/> student  COURSE CODE:" . $row['c7'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u7'];
					
					echo "<br/> student STATUS:" . $row['t7'];
					
					echo "<br/> student  COURSE CODE:" . $row['c8'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u8'];
					
					echo "<br/> student STATUS:" . $row['t8'];
					
					echo "<br/> student  COURSE CODE:" . $row['c9'];
					
					echo "<br/> student NO. OF UNITS:" . $row['u9'];
					
					echo "<br/> student STATUS:" . $row['t9'];
					
				    echo "<br/>" ;
					echo "<br/>" ;
				
			}else{
				echo "FAILLED TO LOGIN";
			}
			
			
		
			
			
?>	



