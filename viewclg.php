<?php
include('config4.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<body>
	<table border="4" align="center">
	<tr>
		<td>CollegeName</td>
		<td>CollegeCode</td>
		<td>Address</td>
		<td>District</td>
		<td>Pin</td>
		</tr>
<?php
		$sql="SELECT * FROM addclg";
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
		</tr>
		<?php
			}
		}
		?>