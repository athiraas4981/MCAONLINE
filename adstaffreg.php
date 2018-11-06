<?php
include('config4.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<body>
	<form action=""  method="post">
		<table>
			
			<tr>
			<td>College name</td>
			<td><input type="text" name="text"></td>
			</tr>
			
		<tr>
				<td>faculty in charge</td>
				<td><input type="text" name="text1"></td>
			</tr>
			<tr>
				<td>Contact number</td>
				<td><input type="text" name="text2"></td>
			</tr>
			<tr>
			<td>email</td>
				<td><input type="text" name="username"></td>
				
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit"</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
	$v1=$_POST['text'];
	$v2=$_POST['text1'];
	$v3=$_POST['text2'];
	$v4=$_POST['username'];
	$sql="INSERT INTO staff(college_name,faculty_in_charge,contact_number,email) Values('$v1','$v2','$v3','$v4')";
    mysql_query($sql) OR die(mysql_error());
	echo"<script> alert('inserted successfully'); </script>";
}
?>

	