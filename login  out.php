<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>LOGIN HOMEPAGE</title>
	<link rel="stylesheet" href="style.css" media="screen">
		
		
		
		
	
	<!-- [if IE]>
<script src="http://html5shiv.googlecode.com/svc/trunck/html5.js"></script>
<![endif]-->
	
</head>


	<body>

	<div id="frm">
			<form action="process22.php" method="POST">
				<g>
					<label>Usernae ::</label>	
					<input type="text" id="user" name="user"/>
				</g> </br></br>
				
				
				<g>
					<label>Password ::</label>	
					<input type="password" id="pass" name="pass"/>
				</g></br></br>
				
				<g>
					<label>Gender ::</label>	
					<input type="text" id="gender" name="gen"/>
				</g></br></br>
				
				<g>
					<label>Occupation ::</label>	
					<input type="text" id="occupation" name="occ"/>
				</g></br></br>
				
				<g>	
					<input type="submit" id="btn" value="CREATE ACCOUNT"/>
				</g></br></br>
				
				
			</form>
			
			
			
				<!---------------------------------------
					END CREATE ACCOUNT,BEGIN LOGIN
				---------------------------------------->
				
		<h5> profile list</h5>		
	
	<form action="process.php" method="POST">
		<g>
			<label>Usernae ::</label>	
			<input type="text" id="user" name="user"/>
		</g> </br></br>
		
		
		<g>
			<label>Password ::</label>	
			<input type="password" id="pass" name="pass"/>
		</g></br></br>
		
		
		<g>	
			<input type="submit" id="btn" value="LOGIN"/>
		</g></br></br>
		
		
	</form>
	
	</div>
 
	</body>
</html>