			
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

      </div>
    </div>
</div>
<p>&nbsp;</p>
<div align="center">

  <form id="form1" name="form1" action="processfees.php" method="post" enctype="multipart/form-data" >
    <table  bgcolor="#FFFFFF"width="1000" height="10">
      <tr>
        <td colspan="4" align="center"  class="red" bgcolor="#CCCCCC"><strong>FILL IN YOUR PAYMENT DETAILS BELOW</strong></td>
        </tr>
	  <tr>
        <td>NAME</td>
        <td><label for="name"></label>
          <input type="text" name="name" id="name" />*</td>
        <td>GUARDIAN</td>
        <td><label for="guardian"></label>
          <input type="text" name="guardian" id="guardian" /></td>
      </tr>
      <tr>
        <td>DEPOSITOR NAME</td>
        <td><label for="depositor"></label>
          <input type="text" name="depositor" id="depositor" />*</td>
        <td>EMAIL</td>
        <td><label for="email"></label>
          <input type="text" name="email" id="email" /></td>
      </tr>
      <tr>
        <td>REG NUMBER</td>
        <td><label for="reg"></label>
          <input type="text" name="reg" id="reg" /></td>
        <td>MOBILE NUMBER</td>
       <td><label for="mobile"></label>
          <input type="text" name="mobile" id="mobile" />*</td>
      </tr>
      <tr>
        <td>SEX</td>
        <td><label for="sex"></label>
          <input type="text" name="sex" id="sex" /></td>
        <td>LEVEL</td>
        <td><label for="level"></label>
          <input type="text" name="level" id="level" /></td>
      </tr>
	
      <tr>
        <td>PAYMENT DATE</td>
        <td><label for="date"></label>
          <input type="text" name="date" id="date" />*</td>
        <td>SESSION</td>
        <td><label for="session"></label>
          <input type="text" name="session" id="session" /></td>
      </tr>
      <tr>
        <td>AGE</td>
        <td><label for="age"></label>
          <input type="text" name="age" id="age" /></td>
        <td>FACULTY</td>
        <td><label for="faculty"></label>
          <input type="text" name="faculty" id="faculty" /></td>
      </tr>
      <tr>
        <td>PAYMENT METHOD</td>
        <td><label for="pay"></label>
          <input type="text" name="pay" id="pay" /></td>
        <td>DEPARTMENT</td>
        <td><label for="dept"></label>
          <input type="text" name="dept" id="dept" /></td>
      </tr>
      <tr>
        <td>ADRESS</td>
        <td><label for="addy"></label>
          <textarea name="addy" id="addy"></textarea></td>
        <td>TOTAL AMOUNT PAYED</td>
        <td><label for="amount"></label>
          <input type="text" name="amount" id="amount" />*</td>
      </tr	   <tr>
        <td>BANK BRANCH</td>
        <td><label for="branch"></label>
         <input type="text" name="branch" id="branch" />*</td>  
        <td>BANK TYPE</td>
        <td><label for="type"></label>
          <input type="type" name="type" id="type" />*</td>
      </tr>
	  <tr>
        <td>SCHOOL FEES</td>
        <td><label for="school"></label>
          <input type="file" name=" school"  id="school" value="file"/></td>
        <td>ACCEPTANCE FEES</td>
        <td><label for="acceptance"></label>      
		<input type="file" name=" acceptance"  id="acceptance" value="file"/></td>
      </tr>
	  <tr>
        <td>DEPARTMENT FEES</td>
        <td><label for="deptfees"></label>
          <input type="file" name=" deptfees"  id="deptfees" value="file"/></td>
        <td>FACULTY FEES</td>
        <td><label for="facultyfees"></label>
          <input type="file" name=" facultyfees"  id="facultyfeel="file"/></td>
      </tr>
	  <tr>
        <td colspan="4" align="center" class="red"><blink > ALL fields are required!!! </blink></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="Submit" id="Submit" value="CREATE ACCOUNT" /></td>
        <td colspan="2"><input type="reset" name="reset" id="reset" value="Reset" /></td>
      </tr>
		
	

	
	</div>
 
	</body>
</html>



