<?php
include('config4.php');
$id=$_REQUEST['id'];
$sql=mysql_query("select * from addclg where clgid='$id'");
	while($rwf=mysql_fetch_array($sql)){
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action=""  method="post">
		<table>
			
			<tr>
			<td>CollegeName</td>
			<td><input type="text" value="<?php echo $rwf[1]  ?>" name="text"></td>
			</tr>
			
		<tr>
				<td>Collegecode</td>
				<td><input type="text"  value="<?php echo $rwf[2] ?>" name="code"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="textarea"  value="" cols="30"><?php echo $rwf[3] ?></textarea></td>
			</tr>
			<tr>
				<td>District</td>
				<td><select name="district"  value="<?php echo $rwf[4] ?>"
				<option value="tvm">THIRUVANANTHAPURAM</option>
					<option value="k">KOLLAM</option>
					<option value="p">PATHANAMTHITTA</option>
					<option value="a">ALAPPUZHA</option>
					<option value="ko">KOTTAYAM</option>
					<option value="i">IDUKKI</option>
					<option value="e">ERANAKULAM</option>
					<option value="e">THRISSUR</option>
					<option value="e">PALAKKAD</option>
					<option value="e">KOZHIKKODE</option>
					<option value="e">MALAPPURAM</option>
					<option value="e">WAYANAD</option>
					<option value="e">KANNUR</option>
					<option value="e">KASARKODE</option>
		</select>
				</td>
			</tr>
			<tr>
				<td>pincode</td>
				<td><input type="number"  value="<?php echo $rwf[5] ?>" name="pin"</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit"</td>
			</tr>
		</table>
	</form>

</body>
</html>
<?php
	}
if(isset($_POST['submit']))
{
	
	$v1=$_POST['text'];
	$v2=$_POST['code'];
	$v3=$_POST['textarea'];
	$v4=$_POST['district'];
	$v5=$_POST['pin'];
	
	$sql="UPDATE addclg SET clgname='$v1',clgcode='$v2',address='$v3',district='$v4',pincode='$v5' WHERE clgid='$id'";
    mysql_query($sql) OR die(mysql_error());
	echo"<script> alert('inserted successfully'); </script>";
	header("Location: editclg.php");
}
?>

	