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
				<td>college Name</td>
				<td><select name="district"> 
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
		
		<option value="<?php  echo $r[1];?>"><?php  echo $r[1];?></option>
		
		<?php
			}
		}
		?>
				<!--<option value="lmc">LMCST</option>
					<option value="cet">CET</option>
					<option value="mohandas">MOHANDAS</option>
					<option value="vidya">VIDYA THRISSUR</option>
					<option value="gect">GEC TRISSUR</option>
					<option value="tkm">TKM</option>
					<option value="mes">MES</option>
					<option value="saint">SAINT GIDS</option>
					<option value="geck">GEC KOZHIKKODE</option>
					<option value="marian">MARIAN</option>-->
					
		</select>
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="VIEW"</td>
			</tr>
		</table>
	</form>
	
	<?php
if(isset($_POST['submit']))
{
	
	$clg=$_POST['district'];
	?>
	
	<table>
	<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Contact Number</td>
	<td>College name</td>
	</tr>
	<?php
	$sql="SELECT * FROM staff WHERE college_name='$clg'";
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
			<td><?php echo $r[2]  ?></td>
			<td><?php echo $r[4] ?></td>
			<td><?php echo $r[3] ?></td>
			<td><?php echo $r[1] ?></td>
		</tr>
		<?php
			}
		}
		?>
	</table>
	
	<?php
	
}
?>
</body>
</html>


	