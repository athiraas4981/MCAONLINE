<?php
include('config4.php');
$id=$_REQUEST['id'];
echo "loading.....";
mysql_query("UPDATE addclg SET status='3' where clgid='$id'")or die(mysql_error());

echo '<meta http-equiv="refresh" content="5; URL=editclg.php">';
?>