<?php
include('config4.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table border="4" align="center">
	<tr>
		<td>name</td>
		<td>email</td>
		<td>password</td>
		<td>phonenumber</td>
		<td>collegelist</td>
		<td>addmsno</td>
		<td>yearofstudy</td>
		<td>Action</td>
		
		
		</tr>
		<?php
		$sql="SELECT * FROM reg ";
		$q=mysql_query($sql) OR die(mysql_error());
		$rc=mysql_num_rows($q);
		if($rc==0)
		{
			echo error;
		}
		else
		{
			while($r=mysql_fetch_array($q)){
			?>
		<tr>
		<td><?php echo $r[1] ?></td>
				<td><?php echo $r[2]  ?></td>
			<td><?php echo $r[3] ?></td>
			<td><?php echo $r[4] ?></td>
			<td><?php echo $r[5] ?></td>
			<td><?php echo $r[6] ?></td>
			<td><?php echo $r[7] ?></td>
			<td><a href="acceptproj.php?id=<?php echo $r[0]; ?>">accept</a> <a href="declineproj.php?id=<?php echo $r[0]; ?>">decline</a></td>
		</tr>
		<?php
			}
		}
		?>
		
	</table>
	
	
</body>
</html>