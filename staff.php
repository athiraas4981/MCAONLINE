<?php 
session_start();
include('config.php');
$id=$_SESSION['uid'];
$uname=$_SESSION['uname'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="staff.php" >home</a>
<a href="staffnot.php" >notification</a>
<a href="accepteduser.php" >Accepted user</a>
<a href="declineduser.php" >Declined user</a>
<a href="removeduser.php" >Removed user</a>

</body>
</html>