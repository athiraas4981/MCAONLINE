<?php
    include("config.php");
    session_start();
if(isset($_POST['submit']))
{
$name=$_POST['event'];
$content=$_POST['content'];
//$fileToUpload=$_POST['fileToUpload'];
$fileToUpload=addslashes(file_get_contents($_FILES["fileToUpload"]["tmp_name"]));
$time=$_POST['TIME'];
$date=$_POST['DATE'];
$venue=$_POST['VENUE'];
$college=$_POST['COLLEGE'];
$PASS=$_POST['PASS'];
$v="insert into event (event_name,content,image,TIME,DATE,VENUE,COLLEGE,PASS) values('$name','$content','$fileToUpload','$time','$date','$venue','$college','$PASS')" ;
$m=mysql_query($v) or die(mysql_error());
}
	?>		
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EVENTS</title>
<title> MCA Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset_st.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style_st.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style> 
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #C3B7B7;
    color: white;
}
</style>
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#"> MCA Student's</a></h1>
      <nav>
        <ul>
          <li class="current"><a href="index.html" class="m1">Home Page</a></li>
          <li><a href="about-us.html" class="m2">About Us</a></li>
          <li><a href="articles.html" class="m3">Our Articles</a></li>
          <li><a href="contact-us.html" class="m4">Contact Us</a></li>
          <li class="last"><a href="sitemap.html" class="m5">Sitemap</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <aside>
      <h3>Categories</h3>
      <ul class="categories">
        <li><span><a href="event.php">EVENTS UPDATE</a></span></li>
        <li><span><a href="#">Student Info</a></span></li>
        <li><span><a href="#">Teachers</a></span></li>
        <li><span><a href="#">Descriptions</a></span></li>
        <li><span><a href="#">Administrators</a></span></li>
        <li><span><a href="#">Basic Information</a></span></li>
        <li><span><a href="#">Vacancies</a></span></li>
        <li class="last"><span><a href="#">Calendar</a></span></li>
      </ul>
      <form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem">
            <h2>Newsletter</h2>
            <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
            <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright">Submit</a></div>
          </div>
        </fieldset>
      </form>
      <h2>Fresh <span>News</span></h2>
      <ul class="news">
        <li><strong>June 30, 2010</strong>
          <h4><a href="#">Sed ut perspiciatis unde</a></h4>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
        <li><strong>June 14, 2010</strong>
          <h4><a href="#">Neque porro quisquam est</a></h4>
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit consequuntur magni. </li>
        <li><strong>May 29, 2010</strong>
          <h4><a href="#">Minima veniam, quis nostrum</a></h4>
          Uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae. </li>
      </ul>
    </aside>
    <section id="content">
      
      <form action="" method="post" enctype="multipart/form-data">
      <div class="rowElem">
             EVENT NAME<input type="text" name="event"><br>
             CONTENT<input type="text" name="content"><br>
             POSTER/IMAGE <br><input type="file" name="fileToUpload" id="fileToUpload"><br>
              TIME<input type="text" name="TIME"><br>
             DATE<input type="text" name="DATE"><br>
              VENUE<input type="text" name="VENUE"><br>
               COLLEGE<input type="text" name="COLLEGE"><br>
               PASS<input type="text" name="PASS"><br>
               <input type="submit" value="Upload" name="submit"><br><br><br>
            
    </div>
      </form>
      
    </section>
    <P> EVENTS UPLOADING DETAILS</P>
<?php
$con=mysqli_connect("localhost","root","","mca");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM event");
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
echo "<td>" .$row[3] . "</td>";
echo "<td>" .$row[4] . "</td>";
echo "<td>" .$row[5] . "</td>";
echo "<td>" .$row[6] . "</td>";
//echo "<td>" . $row['image'] . "</td>";
echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></td>';
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2010 <a href="#">MCA</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="">MCA student</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
