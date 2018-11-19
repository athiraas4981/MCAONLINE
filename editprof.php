
<?php
include('config.php');
$id=$_REQUEST['id'];
$sql=mysql_query("select * from st_reg where id='$id'") or die(mysql_error());
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
	<title>Education</title>
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
  
		 <!-- register Modal -->
    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
            	<!--SIGNIN AS USER START-->
                <div class="user-box">
                	<h2>Student Registration</h2>
                   

                        <div class="input-container">
                            <button type="submit" class="btn-style" name="submit">Sign Up</button>
                        </div>
                    </div>
						</form>
                   
                </div>
                <!--SIGNIN AS USER END-->
              
                <div class="clearfix"></div>
            </div>
			<div class="clearfix"></div>
		</div>
		</div>
		
    <!-- register Modal end-->
    
    <!-- SIGNIN MODEL START -->
    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
                <div class="user-box">
                    <h2>Sign In</h2>
                    <!--FORM FIELD START-->
					
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    
                    <!--OPTION END-->
                
                </div>
                
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
		</form>
		
    <!-- SIGNIN MODEL END -->
    
	<div id="sidr">
		<div class="logo_wrap">
			<a href="#"><img src="extra-images/logo.png" alt=""></a>
		</div>
		<div class="clearfix clear"></div>
		<!-- Your content -->
		<div class="kf-sidebar">
			<!--KF_SIDEBAR_SEARCH_WRAP START-->
			<div class="widget widget-search">
				<h2>Search Course</h2>
				<form>
					<input type="search" placeholder="Keyword...">
				</form>
			</div>
			<!--KF_SIDEBAR_SEARCH_WRAP END-->

			<!--KF_SIDEBAR_ARCHIVE_WRAP START-->
			<div class="widget widget-archive ">
				<h2>Archives</h2>
				<ul class="sidebar_archive_des">
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>January 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>February 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>March 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>April 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>May 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>June 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>August 2016</a>
					</li>
				</ul>
			</div>
			<!--KF_SIDEBAR_ARCHIVE_WRAP END-->

			<p class="copy-right-sidr">Design and Developed by KodeForest @ All Rights Reserved by KodeForest</p>
		</div>
	</div>
    	<!--HEADER START-->
    	<header id="header_2">
    		<!--kode top bar start-->
    		<div class="top_bar_2">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-5">
	    				
	    				</div>
	    				<div class="col-md-7">

    						<ul class="login_wrap">
    							<li><a href="viewbooks.php" Books></li>
    							<li><a href="viewnote.php"Notes></li>
    						</ul>	    					
	    					<ul class="top_nav">
	    						
	    						
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
    							<a href="#"><img src="../extra-images/logo.png" alt=""></a>
    						</div>
    					</div>
    					<div class="col-md-10">
    						<!--kode nav_2 start-->
    						<div class="nav_2" id="navigation">
    							<ul>
    								<li><a href="student-prof.php">home</a></li>
									<!--<li><a href="aboutus.php">About Us</a></li>-->
		                            <li><a href="#">Event</a>
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
		                                   <li><a href="addnote.php">Add Notes</a></li>
		                                    <li><a href="viewnote.php"> List Notes</a></li>
		                                </ul>
		                                	
		                            </li>
		                            
		                            <li><a href="../gallery-masonary.php">Gallery</a>
		                            	
		                            </li>
									
									
		                                    <li><a href="../index.php">LOGOUT</a></li>
		                               
		                                
									
		                            <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li>
    							</ul>
                                   
    							<!--DL Menu Start-->
					            <div id="kode-responsive-navigation" class="dl-menuwrapper">
					                <button class="dl-trigger">Open Menu</button>
					                <ul class="dl-menu">
										<li><a href="student-prof.php">home</a></li>
										<!--<li><a href="aboutus.php">about us</a></li>-->
					                    <li class="menu-item kode-parent-menu"><a href="#">Event</a>
					                        <ul class="dl-submenu">
					                           <li><a href="../our-event.php">our Event</a></li>
			                                    <li><a href="../event-list.php">Event List</a></li>
			                                    <li><a href="../event-detail.php">Event Detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Blog</a>
					                        <ul class="dl-submenu">
					                            <li><a href="../our-blog.php">our Blog</a></li>
			                                 
					                        </ul>
					                    </li>
										<li class="menu-item kode-parent-menu"><a href="#">Course</a>
					                        <ul class="dl-submenu">
					                            <li><a href="../our-courses.php">Our Course</a></li>
			                                    <li><a href="../courses-list.php">Course List</a></li>
			                                	<li><a href="../courses-detail.php">Course Detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Teacher</a>
					                        <ul class="dl-submenu">
					                            <li><a href="../our-teacher.php">Our Teacher</a></li>
			                                    <li><a href="../our-teacher-details.php">our teacher details</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Gallery</a>
					                        <ul class="dl-submenu">
					                            <li><a href="../gallery-masonary.php">Masonary 2 Col </a></li>
			                                		                        </ul>
					                    </li>
					                   
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Contact US</a>
					                        <ul class="dl-submenu">
					                            <li><a href="../contactus.php">Contact Us 1</a></li>
			                                   </ul>
					                    </li>
					                </ul>
			                     <li class="menu-item kode-parent-menu"><a href="#">LOGOUT</a>
					                        <ul class="dl-submenu">
					                            <li><a href="../index.php">Masonary 2 Col </a></li>
			                                		                        </ul>
					                    </li>
					                   
					            </div>
					            <!--DL Menu END-->
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

    				<div class="col-md-8">
                                <form action="" method="post">
                                    <div class="contact_des">
                                        <h4>Edit Profile</h4>
                                         <div class="inputs_des des_2">
                                            <input type="text" placeholder="Name " value="<?php echo $r[1]; ?>" name="prof_name"><i class="fa fa-user"></i>
                                        </div>
                                        
                                        <div class="inputs_des des_2">
                                            <input type="text" placeholder="Email " value="<?php echo $r[3]; ?>" name="prof_email"><i class="fa fa-mail-forward"></i>
                                        </div>
                                        
                                        <div class="inputs_des des_2">
                                            <input type="text" placeholder="Phone num " value="<?php echo $r[4]; ?>" name="prof_phone"><i class="fa fa-phone"></i>
                                        </div>
   										<div class="inputs_des des_2">
                                            <input type="text" placeholder="Achievement type" value="<?php echo $r[5]; ?>" name="prof_colg"><i class="fa fa-book"></i>
                                        </div>
										<div class="inputs_des des_2">
                                           <textarea name="prof_desc"><?php echo $r[8]; ?></textarea>
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
										<div class="inputs_des des_2">
                                         <input type="text" placeholder="Semester" value="<?php echo $r[11];?>" name="prof_sem"><!--<i class="fa fa-book">--></i> 
                                        </div>
										
                                        <div class="inputs_des des_2">
                                            <button type="submit" name="addskill">Edit Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
    				</div>
    			</div>
    		</section>
    		<!--ABOUT UNIVERSITY END-->
			
    	</div>
        <!--Content Wrap End-->

		
		<!--FOOTER START-->
		<footer>
			<!--EDU2 FOOTER CONTANT WRAP START-->
				<div class="container">
					<div class="row">
						<!--EDU2 FOOTER CONTANT DES S
TART-->
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
if(isset($_POST['addskill']))	{
	
	
	$name=$_POST['prof_name'];
	$email=$_POST['prof_email'];
	$phone=$_POST['prof_phone'];
	$clg=$_POST['prof_colg'];
	$desc=$_POST['prof_desc'];
	$sem=$_POST['prof_sem'];
	
	//echo $name."<br>".$email."<br>".$phone."<br>".$clg."<br>".$desc;
	$sql=mysql_query("UPDATE st_reg SET name='$name',email='$email',phone='$phone',college='$clg',aboutme='$desc',semester='$sem' WHERE id='$id'") or die(mysql_error());
	
	echo "<meta http-equiv='refresh' content='0;url=student-prof.php'>";
}
?>



