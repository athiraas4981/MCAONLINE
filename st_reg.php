<?php
include('config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h3>User registration</h3>
<form action="" method="post">
 <input type="text" name="name" placeholder="Name">
 <input type="text" name="email" placeholder="E-mail">
 <input type="password" name="password" placeholder="Password">
 <input type="text" name="phonenumber" placeholder="Phone number">
 <select name="collegelist">
                            <option value="college details">College Details</option>
                            <option value="lmcst">Lourdes Matha College Of Science And Technology</option>
                         	<option value="cet">College Of Engineering And Technology</option>
                         	<option value="mcet">Mohandas College Of Engineering And Technology</option>
                         	<option value="rit">Rajiv Gandhi Institute Of Technology</option>
                         	<option value="ajcet">Amal Jyothi College Of Engineering And Technology</option>
                         	<option value="mes">MES College Of Engineering</option>
                         	</select>
  <input type="text" name="addmsno" placeholder="Addmission number">
  <select name="yearofstudy">
                            <option value="Year Of Study">Year Of Study</option>
                            <option value="2017-2018">2017-2018</option>
                            <option value="2016-2017">2016-2017</option>
                            <option value="2015-2016">2015-2016</option>
                            <option value="2014-2015">2014-2015</option>
                         	</select>
  <button type="submit" class="btn-style" name="submit">Sign Up</button>
</form>
</body>
</html>
<?php 

if (isset($_POST['submit'])){
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phnumber=$_POST['phonenumber'];
	$collegelist=$_POST['collegelist'];
	$addmsno=$_POST['addmsno'];
	$yearofstudy=$_POST['yearofstudy'];
	
	echo $name."</br>";
	echo $email."</br>";
	echo $password."</br>";
	echo $phnumber."</br>";
	echo $collegelist."</br>";
	echo $addmsno."</br>";
	echo $yearofstudy."</br>";
	
//	$sql="INSERT INTO st_reg (name,email,phone,college,admno,yr_study)VALUES('$name','$email','$phnumber','$collegelist','$addmsno','$yearofstudy')";
//	mysql_query($sql) or mysql_error($sql);
	$v="insert into st_reg (name,email,phone,college,admno,yr_study) values('$name','$email','$phnumber','$collegelist','$addmsno','$yearofstudy')" ;
$m=mysql_query($v) or die(mysql_error());
	echo $v;
	$query = mysql_query("SELECT MAX(id) as max FROM st_reg"); 
	$row = mysql_fetch_array($query);
	$max_id = $row[0];
	
	mysql_query("INSERT INTO login (st_id,email,password,actype)VALUES('$max_id','$email','$password','student')");
	
}

?>