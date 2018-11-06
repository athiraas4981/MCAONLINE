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

	