<?php
include('config.php');
$id=$_REQUEST['id'];

mysql_query("UPDATE st_reg SET status='3' WHERE id='$id'");

mysql_query("UPDATE login SET status='3' WHERE st_id='$id' AND actype='student'");

?>