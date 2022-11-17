			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


</head>
<body>
 <form id="form1" name="form1" action="index.php" method="post" enctype="multipart/form-data" >   
	<input type="file" name="image" ><input type="submit" name="submit" value="upload">
	</form> 
	
<?php


if(isset($_POST ['submit'])){
	
	
mysql_connect("localhost", "root", "");
mysql_select_db("tutorial");

$imageName = mysql_real_escape_string($_FILES ["image"]["name"]);
$imageDate = mysql_real_escape_string(file_get_contects($_FILES ["image"]["tmp_name"]));
	



echo $imageDate;

}




?>	
	
	
</body>

</html>	 



