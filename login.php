<?php
session_start();
include('config.php');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="loginbox">
<img src=".admin3.png" class="admin">
<form action="" method="post">
	<input type="text" name="uname" placeholder="username">
	<input type="password" name="pass" placeholder="password">
	<input type="submit" name="submit" id="Login">
    <a href="#"><p>Forget password??</p></a>
        <a href="http://www.pscexams.com/"><p>Don't have an account?</p></a>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	
	$sql="SELECT * FROM login WHERE email='$uname' AND password='$pass' AND status='1'";
	
	$qry=mysql_query($sql) or die(mysql_error());
	
	$rw=mysql_num_rows($qry);
	
	if($rw>0){
		
		while($row=mysql_fetch_array($qry)){
			
			
		$actype=$row[4];
		$id=$row[1];
			
			if($actype=="staff"){
				
				$_SESSION['uname']=$email;
				$_SESSION['uid']=$id;
				echo "<script>window.location.replace('index.html');</script>";
				
				
			}elseif($actype=="student"){
				
				$_SESSION['uid']=$id;
				
				echo "<script>window.location.replace('student-prof.php');</script>";
			}
			
			
		}
		
		
	}else{
		
		echo "invalid user";
		
	}
}
?>