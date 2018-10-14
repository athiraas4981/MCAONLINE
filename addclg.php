<?php
include('config4.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action=""  method="post">
		<table>
			
			<tr>
			<td>CollegeName</td>
			<td><input type="text" name="text"></td>
			</tr>
			
		<tr>
				<td>Collegecode</td>
				<td><input type="text" name="code"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="textarea" cols="30"></textarea></td>
			</tr>
			<tr>
				<td>District</td>
				<td><select name="district">
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
				<td><input type="number" name="pin"</td>
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
	$v2=$_POST['code'];
	$v3=$_POST['textarea'];
	$v4=$_POST['district'];
	$v5=$_POST['pin'];
	$sql="INSERT INTO addclg(clgname,clgcode,address,district,pincode) Values('$v1','$v2','$v3','$v4','$v5')";
    mysql_query($sql) OR die(mysql_error());
	echo"<script> alert('inserted successfully'); </script>";
}
?>

	<?php /*?>$maxval= mysql_query("SELECT MAX(id) FROM addclg");
	//$val=mysql_fetch_array($maxval);
	$max= $val[0];
	mysql_query("INSERT INTO addclg2(clgid,clgcode,clgname,address,district,pincode) Values('$max','$v2','$v1','$v3','$v4','$v5')");
	$sql="SELECT * FROM addclg ";
		$q=mysql_query($sql) OR die(mysql_error());
		$rc=mysql_num_rows($q);
		if($rc==0)
		{
			echo error;
		}
		else
		{
			while($r=mysql_fetch_array($q)){
			?><?php */?>
	
		<?php /*?><tr>
			<td><?php echo $r[1] ?></td><?php 
				<td><?php echo $r[2]  ?></td>
			<td><?php echo $r[3] ?></td>
			<td><?php echo $r[4] ?></td>
			<td><?php echo $r[5] ?></td>
			<td><?php echo $r[6] ?></td>
			<td><?php echo $r[7] ?></td>
</tr>
		<?php
			}
		}
			}
		?>

        
<?php */?>