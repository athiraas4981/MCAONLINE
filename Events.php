<?php
include('config2.php');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    <form action="" enctype="multipart/form-data" method="post">
	<h4><U>EVENTS</U></h4>
	<table>
	<tr>
		<td>Event Name:</td>
		<td><input type="text" class="form-control"  name="ename"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><textarea name="description" class="form-control"  rows="5"></textarea></td>
	</tr>
	<tr>
		<td>Poster:</td>
		<td><input type="file" name="file" value="Browse"></td>
	</tr>
	<tr>
		<td>Venue:</td>
		<td><input type="text" class="form-control"  name="venue"></td>
	</tr>
	<tr>
		<td>Event Date:</td>
		<td>From:<input type="text" class="form-control"  name="from"></td><td>To:<input type="text" class="form-control" name="to"></td>
	</tr>
	<tr>
	    <td>Price:</td>
		<td><input type="text" class="form-control"  name="price"></td>
	</tr>
	<tr>
	<td colspan="2" align="center" ><input type="submit" name="submit" value="submit" style="background-color: darkgrey;color: white;width:100px;height:40px;"></td>
	</tr>	
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
	$v1=$_POST['ename'];
	$v2=$_POST['description'];
	$v3=mysql_real_escape_string(file_get_contents($_FILES["file"] ["tmp_name"]));
	$v4=$_POST['venue'];
	$v5=$_POST['from'];
	$v6=$_POST['to'];
	$v7=$_POST['price'];
	$sql="insert into events(Event_name,Event_descrip,image,Venue,vFrom,vTo,Price)Values('$v1','$v2','$v3','$v4','$v5','$v6','$v7')";
	/*echo $sql;*/
	mysql_query($sql) OR die(mysql_error());
	
	 	echo"<script> alert('inserted successfully'); </script>";

}
        
?>