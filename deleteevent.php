<?php
include('config.php');
$id=$_REQUEST['id'];

$sql=mysql_query("DELETE FROM event WHERE id='$id'");
echo "<meta http-equiv='refresh' content='0;url=viewevent.php'>";
?>