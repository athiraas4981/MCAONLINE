
<?php
    include("config.php");
    session_start();
if(isset($_POST['submit']))
{
$NAME=$_POST['NAME'];
$email=$_POST['email'];
$Mobnumber=$_POST['Mobnumber'];
$COLLEGE=$_POST['COLLEGE'];
$Position=$_POST['Position'];
$v="insert into staff_det (name,email,phone,college,position) values('$NAME','$email','$Mobnumber','$COLLEGE','$Position')" ;
$m=mysql_query($v) or die(mysql_error());
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
name<input type="text"  name="NAME">
email<input type="text"  name="email">
Mobnumber<input type="text"  name="Mobnumber">
COLLEGE<input type="text"  name="COLLEGE">
Position<input type="text"  name="Position">
<input type="submit" name="submit">

</body>
</html>