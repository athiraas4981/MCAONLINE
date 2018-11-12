<?php
include('config.php');
$id=$_REQUEST['id'];

mysql_query("UPDATE st_reg SET status='1' WHERE id='$id'");
mysql_query("UPDATE login SET status='1' WHERE st_id='$id' AND actype='student'");
//echo "meta http-equiv='refresh' content='0;url=eventlist.php'>";
echo "<script>alert('Successfully approved!'); window.location.replace('staffnot.php');</script>";

?>