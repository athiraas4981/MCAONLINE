
<?php
include('config.php');
session_start();
$st_id=$_SESSION['uid'];
	    
$sql=mysql_query("select * from st_reg where id='$st_id'") or die(mysql_error());
$a=mysql_num_rows($sql);
if($a == 0){
	echo "no result";
}
else{
	while($r=mysql_fetch_row($sql)){
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/uoe/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 08:39:54 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MCA online</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="css/fullcalendar.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="css/jquery.bxslider.css" rel="stylesheet"> 
	<!-- Font Awesome StyleSheet CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="js/dl-menu/component.css" rel="stylesheet">
	<link href="svg/style.css" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="css/widget.css" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="css/typography.css" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="css/shortcodes.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="style.css" rel="stylesheet">
	<!-- Color CSS -->
	<link href="css/color.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="css/selectric.css" rel="stylesheet">
	<!-- SIDE MENU -->
	<link rel="stylesheet" href="css/jquery.sidr.dark.css">
</head>

<body>
	<!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
    
    <div id="sidr">
		<div class="logo_wrap">
			<a href="#"><img src="extra-images/logo.png" alt=""></a>
		</div>
    	<!--HEADER START-->
    	<header id="header_2">
    		<!--kode top bar start-->
    		<div class="top_bar_2">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-5">
	    					<div class="pull-left">
	    						<em class="contct_2"><i class="fa fa-phone"></i> Call Us  on 0800 123 46 4747</em>
	    					</div>
	    				</div>
	    				<div class="col-md-7">
    						
    						<ul class="top_nav">
	    						<li><a href="blog-detail.html">News</a></li>
	    						<li><a href="event-detail.html">Event</a></li>
	    						<li><a href="../students-site/login.php">student</a></li>
	    						<li><a href="contactus.html">contact us</a></li>
	    					</ul>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    		<!--kode top bar end-->
        	
	    	<!--kode navigation start-->
    		<div class="kode_navigation">
    			<div id="mobile-header">
                	<a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
                </div>
    			<div class="container">
    				<div class="row">
    					<div class="col-md-2">
    						<div class="logo_wrap">
    							
    						</div>
    					</div>
    					<div class="col-md-10">
    						<!--kode nav_2 start-->
    						<div class="nav_2" id="navigation">
    							<ul>
    								<li><a href="student-prof.php">home</a></li>
									<li><a href="">Event</a>
		                            	<ul>
		                                    <li><a href="addevent.php">Add events</a></li>
		                                    <li><a href="viewevent.php">Event List</a></li>
		                                    
		                                </ul>
		                            </li>
		                            <li><a href="#">Books</a>
		                            	<ul>
		                                   <li><a href="addbooks.php">Add Books</a></li>
		                                    <li><a href="viewbooks.php">Books List</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Notes</a>
		                            	<ul>
		                                	<li><a href="addnote.php">Books and Notes</a></li>
											<li><a href="viewnote.php">Course List</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="login.php">Logout</a></li>
		                           
    							</ul>
    							
    						</div>
    						<!--kode nav_2 end-->
    					</div>
    				</div>
    			</div>
    		</div>
    		<!--kode navigation end-->
		</header>
		<!--HEADER END-->

<!--Content Wrap Start-->
    	<div class="kf_content_wrap">
    		<!--ABOUT UNIVERSITY START-->
    		<section>
    			<div class="container">
    				<div class="row">

    					<div class=" col-lg-6 col-md-7">
    						<!--TEACHER BIO WRAP START-->
    						<div class="teacher_bio_wrap">
    							<!--TEACHER BIO LOGO START-->
    							<div class="teacher_bio_logo">
    								<span><i class="icon-book236"></i></span>
    								<h3>My Profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editprof.php?id=<?php echo $st_id; ?>" ><i class="fa fa-edit"></i></a></h3>
    							</div>
    							<!--TEACHER BIO LOGO END-->
    							<!--TEACHER BIO des START-->
    							<div class="teacher_bio_des">
    								<h4><?php echo $r[1]; ?></h4>
    								<ul>
    									<li><i class="fa fa-envelope-o"></i><a href="#"><?php echo $r[3];  ?></a></li>
    									<li><i class="fa fa-calendar"></i><?php echo $r[5];  ?></li>
    									<li><i class="fa fa-phone"></i>+91-  <?php echo $r[4]; ?></li>
    								</ul>
    								<p><?php echo $r[8]; ?></p>
    							</div>
    							<!--TEACHER BIO DES END-->
    						</div>
    						<!--TEACHER BIO WRAP END-->
    					</div>
    					
    					<div class="col-lg-6 col-md-5">
    						<!--TEACHER THUMB START-->
    						<div class="teacher_thumb">
    							<figure>
    								<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $r[9] ).'"/>'; ?>
    								<figcaption>
    									<ul>
    										<li><a href="editprofpic.php?id=<?php echo $st_id; ?>"><i class="fa fa-edit"></i></a></li>
    										
    									</ul>
    								</figcaption>
    							</figure>
    						</div>
    						<!--TEACHER THUMB END-->
    					</div>


    				</div>
    			</div>
    		</section>
    		<!--ABOUT UNIVERSITY END-->
			<!--SKILl SECTION START-->
			<section>
				<div class="container">
					<!--SKILl PROGRESS BAR WRAP START-->
					<div class="skill_progress_wrap">

						<div class="row">
							<div class="col-lg-6 col-md-7 ">
								<!--SKILl THUMB START-->
								<div class="skill_thumb">
									<figure><img src="extra-images/skill_thumb.jpg" alt=""/></figure>
								</div>
								<!--SKILl THUMB END-->
							</div>

							<div class="col-lg-6 col-md-5">
								<!--SKILl PROGRESS BAR des START-->
								<div class="skill_progress_des">
									<div class="progress_heading">
										<h4>Skills&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="addskill.php?id=<?php echo $st_id; ?>" ><i class="fa fa-plus-square"></i></a></h4>
									</div>
							<?php
										    
$sql_skill=mysql_query("select * from skills where st_id='$st_id'") or die(mysql_error());
$a_skill=mysql_num_rows($sql_skill);
if($a_skill == 0){
	echo "no skills";
}
else{
	while($r_skill=mysql_fetch_row($sql_skill)){
									
									?>
									<div class="progress-names">
											<span><?php echo $r_skill[2] ?></span>
										<div class="progressbar" data-perc="<?php echo $r_skill[3] ?>">
											<div class="bar"><span></span></div>
											<div class="label"><span></span></div>
											
										</div>
										<span><a href="editskill.php?id=<?php echo $r_skill[0]; ?>"><i class="fa fa-edit"></i></a> </span>
									</div>
									
									<?php
		
	}
}
		
		?>
								</div>
								<!--SKILl PROGRESS BAR DES END-->
							</div>
						</div>
					</div>
					<!--SKILl PROGRESS BAR WRAP END-->
					<!--TRANINIG  WRAP START-->
					<div class="kf_training_wrap">
						<div class="training_heading">
							<h4>My Achievements &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="addachiev.php?id=<?php echo $st_id; ?>" ><i class="fa fa-plus-square"></i></a></h4>
						</div>
						<ul>
						<?php
										    
$sql_achiev=mysql_query("select * from achievements where st_id='$st_id' ORDER BY date_achievement DESC") or die(mysql_error());
$a_achiev=mysql_num_rows($sql_achiev);
if($a_achiev == 0){
	echo "no achievements";
}
else{
	while($r_achiev=mysql_fetch_row($sql_achiev)){
									
									?>
							<li>
								<div class="kf_training_outer_des">
									<!--TRANINIG  DES START-->
									<div class="kf_training_date">
										<span><?php echo $r_achiev[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editachiev.php?id=<?php echo $r_achiev[0]; ?>"><i class="fa fa-edit"></i></a></span>
									</div>
									<div class="kf_training_des">
										<h6><?php echo $r_achiev[3]; ?></h6>
										<span><?php echo $r_achiev[4]; ?></span>
										<p><?php echo $r_achiev[5]; ?> </p>
									</div>
									<!--TRANINIG  DES END-->
								</div>
							</li>
							<?php
		
	}
}
		
		?>						
						</ul>
					</div>
					<!--TRANINIG  WRAP END-->
				</div>
			</section>
			<!--SKILl SECTION END-->
			    	</div>
        <!--Content Wrap End-->

		
		<!--FOOTER START-->
		<footer>
			<!--EDU2 FOOTER CONTANT WRAP START-->
				<div class="container">
					<div class="row">
						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-links">
								<h5>Information</h5>
								<ul>
									<li><a href="#">About us</a></li>
									<li><a href="#">Our Stories</a></li>
									<li><a href="#">My Account</a></li>
									<li><a href="#">Our History</a></li>
									<li><a href="#">Sprcialist Info</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-links">
								<h5>Student Help</h5>
								<ul>
									<li><a href="#">My Info</a></li>
									<li><a href="#">My Questions</a></li>
									<li><a href="#">F.A.Q</a></li>
									<li><a href="#">Serch Courses</a></li>
									<li><a href="#">Latest Informations</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget wiget-instagram">
								<h5>Instagram</h5>
								<ul>
									<li><a href="#"><img src="extra-images/instagram-1.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-2.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-3.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-4.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-5.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-6.jpg" alt=""/></a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-contact">
								<h5>Contact</h5>
								<ul>
									<li>PO Box UN152468, 1 Street North, New Towm, California, USA</li>
									<li>Phone : <a href="#"> 5 (012) 4565 789</a></li>
									<li>Fax : <a href="#"> 5 (012) 4565 789</a></li>
									<li>Email : <a href="#"> Info@info.com</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->
					</div>
				</div>
		</footer>
		<!--FOOTER END-->
		<!--COPYRIGHTS START-->
		<div class="edu2_copyright_wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="edu2_ft_logo_wrap">
							<a href="#"><img src="extra-images/ft_logo.png" alt=""/></a>
						</div>
					</div>

					<div class="col-md-6">
						<div class="copyright_des">
							<span>&copy; All Rights reserved. Powered By <a href="#">KODEFOREST</a></span>
						</div>
					</div>

					<div class="col-md-3">
						<ul class="cards_wrap">
							<li><a href="#"><img src="extra-images/visacard.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/mastercard.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/americancard.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/card.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/descoverycard.png" alt=""/></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--COPYRIGHTS START-->
    </div>
    <!--KF KODE WRAPPER WRAP END-->
	<!--Bootstrap core JavaScript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Bx-Slider JavaScript-->
	<script src="js/jquery.bxslider.min.js"></script>
	<!--Owl Carousel JavaScript-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Pretty Photo JavaScript-->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!--Dl Menu Script-->
	<script src="js/dl-menu/modernizr.custom.js"></script>
	<!--Dl Menu Script-->
	<script src="js/dl-menu/jquery.dlmenu.js"></script>
	<!--Dl Menu Script-->
	<script src="js/dl-menu/modernizr.custom.js"></script>
	<!--Dl Menu Script-->
	<script src="js/dl-menu/jquery.dlmenu.js"></script>
	<!--Full Calender JavaScript-->
	<script src="js/moment.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery.downCount.js"></script>
	<!--Image Filterable JavaScript-->
	<script src="js/jquery-filterable.js"></script>
	<!--Accordian JavaScript-->
	<script src="js/jquery.accordion.js"></script>
	<!--Number Count (Waypoints) JavaScript-->
	<script src="js/waypoints-min.js"></script>
	<!--v ticker-->
	<script src="js/jquery.vticker.min.js"></script>
	<!--select menu-->
	<script src="js/jquery.selectric.min.js"></script>
	<!--Side Menu-->
	<script src="js/jquery.sidr.min.js"></script>
	<!--Custom JavaScript-->
	<script src="js/custom.js"></script>
   
</body>

<!-- Mirrored from kodeforest.net/html/uoe/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 08:43:17 GMT -->
</html>

<?php
	}
}
?>



