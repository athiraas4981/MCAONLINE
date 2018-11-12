<?php
include("config.php");
 session_start();
if(isset($_POST['submit']))
{
	
$name=$_POST['email'];
$pass=$_POST['password'];
$_SESSION['name']=$name;
$j="SELECT * FROM admin WHERE username='$name' and password='$pass' ";
$v=mysql_query($j) or die(mysql_error());
$s=mysql_num_rows($v);
	if($s==0)
	{
		echo "<script>alert('username and password wrong');</script>";
	}
	else {
	header('Location:index.html');
	
	}
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="utf-8">
<title>login</title>
</head>

<body>
<div class="loginbox">
<img src=".admin3.png" class="admin">

    <form action="" method="post">
        <h1>Login </h1>
    <p>username</p>
<input type="text" name="email" placeholder="Enter Username" id=""/>
<p>password</p>
        
        <input type="text" name="password" placeholder="Enter password" id=""/>
<input type="submit" name="submit" value="Login" placeholder="" id="Login"/>
        <a href="#"><p>Forget password??</p></a>
        <a href="http://www.pscexams.com/"><p>Don't have an account?</p></a>
    </form>

    </div>
</body>
</html>
