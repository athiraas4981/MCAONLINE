<?php
include('config4.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset_st.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style_st.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li class="current"><a href="index stud1.php" class="m1">Home Page</a></li>
           <li><a href="aboutus.php" class="m2">About Us</a></li>
          <!--<li><a href="articles.html" class="m3">Our Articles</a></li>
          <li><a href="contact-us.html" class="m4">Contact Us</a></li>
          <li class="last"><a href="sitemap.html" class="m5">Sitemap</a></li>-->
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
        <li><span><a href="#">Profile</a></span></li>
		<li><span><a href="#">Add Event</a></span></li>
		<li><span><a href="#" style="color:#FF4500">Event Registration</a></span></li>
        <li><span><a href="#">View Result</a></span></li>
        <li><span><a href="#">Notes sharing</a></span></li>
		<li><span><a href="#">Upload Notes</a></span></li>
        <!--<li><span><a href="#">Administrators</a></span></li>
        <li><span><a href="#">Basic Information</a></span></li>
        <li><span><a href="#">Vacancies</a></span></li>
        <li class="last"><span><a href="#">Calendar</a></span></li>-->
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
      <div id="">
       <form action="" enctype="multipart/form-data" method="post">
	<h4><U>EVENT REGISTRATION</U></h4>
	<table>
	<tr>
		<td>Student Name:</td>
		<td><input type="text" class="form-control"  name="sname"></td>
	</tr>
	<tr>
		<td>Student Regno:</td>
		<td><input type="text" class="form-control"  name="regno"></td>
	</tr>
	<tr>
		<td>College Name</td>
		<td><input type="text" class="form-control"  name="clgname"></td>
	</tr>
	<tr>
		<td>Event Name</td>
		<td><input type="text" class="form-control"  name="ename"></td>
	</tr>
	<tr>
	<td colspan="2" align="center" ><input type="submit" name="submit" value="Register" style="background-color: darkgrey;color: white;width:100px;height:40px;"></td>
	</tr>	
</table>
</form>
 <?php
if(isset($_POST['submit']))
{
	
	$v1=$_POST['sname'];
	$v2=$_POST['regno'];
	$v3=$_POST['clgname'];
	$v4=$_POST['ename'];
	$sql="insert into eventreg(Name,Admisson_no,college_name,Event_name)Values('$v1','$v2','$v3','$v4')";
	/*echo $sql;*/
	mysql_query($sql) OR die(mysql_error());
	
	 	echo"<script> alert('inserted successfully'); </script>";

}
        
?>
  <div class="inside">
        <!-- <h2>Recent <span>Articles</span></h2>
        <ul class="list">
          <li><span><img src="images/icon1.png"></span>
            <h4>About Template</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
          <li><span><img src="images/icon2.png"></span>
            <h4>Branch Office</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
          <li class="last"><span><img src="images/icon3.png"></span>
            <h4>Student’s Time</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
        </ul>-->
        <h2>Move Forward <span>With Your Education</span></h2>
        <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
        <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
        <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p>
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>