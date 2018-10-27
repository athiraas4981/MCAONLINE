<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","mca");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM event WHERE status='1'");
echo "<table border='2'>
<tr>
<th>EVENTS</th>
<th> CONTENT</th>
<th>IMAGE/POSTER</th>
<th>TIME</th>
<th>DATE</th>
<th>VENUE</th>
<th>COLLEGE</th>
<th>PASS</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" .$row[1] . "</td>";
echo "<td>" .$row[2] . "</td>";
echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row[3] ).'"/></td>';
echo "<td>" .$row[4] . "</td>";
echo "<td>" .$row[5] . "</td>";
echo "<td>" .$row[6] . "</td>";
//echo "<td>" . $row['image'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>