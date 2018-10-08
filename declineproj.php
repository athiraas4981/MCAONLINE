<?php
include('config4.php');
$id=$_REQUEST['id'];
echo "loading.....";
mysql_query("UPDATE login SET status='2' WHERE studid='$id'")or die(mysql_error());

echo '<meta http-equiv="refresh" content="5; URL=staffproj.php">';
?>