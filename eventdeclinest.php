<?php
include('config.php');
$id=$_REQUEST['id'];

mysql_query("UPDATE event SET status='2' WHERE id='$id'");

echo'<meta http-equiv="refresh" content=0;url="Eventnotification.php">'

?>