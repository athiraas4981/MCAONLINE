<?php
include('config4.php');
$id=$_REQUEST['id'];
echo "loading.....";
mysql_query("UPDATE login SET status='1' WHERE studid=$id")or die(mysql_error());
//header("refresh:5;url=staffproj.php");

echo '<meta http-equiv="refresh" content="5; URL=staffproj.php">';
//location:staffproj.php
?>
