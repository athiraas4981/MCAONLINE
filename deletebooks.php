<?php
include('config.php');
$id=$_REQUEST['id'];

$sql=mysql_query("DELETE FROM bookes WHERE id='$id'");
echo "<meta http-equiv='refresh' content='0;url=viewbooks.php'>";
?>