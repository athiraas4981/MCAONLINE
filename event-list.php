<?php 
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/uoe/event-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 08:46:34 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Event List</title>

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
                    <h2>Sign up as a User</h2>
                    <!--FORM FIELD START-->
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="Name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign Up</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->
                </div>
                <!--SIGNIN AS USER END-->
                <div class="user-box-footer">
                    Already have an account? <a href="#">Sign In</a>
                </div>
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
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign In</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->
                
                </div>
                <div class="user-box-footer">
                    <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
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
                            <div class="pull-left">
                                <em class="contct_2"><i class="fa fa-phone"></i> Call Us  on 0800 123 46 4747</em>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="lng_wrap">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-globe"></i>Language
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><i><img src="images/english.jpg" alt=""></i>English</a></li>
                                        <li><a href="#"><i><img src="images/german.jpg" alt=""></i>German</a></li> 
                                    </ul>
                                </div>
                            </div>
                           <ul class="login_wrap">
    							<li><a href=""><i class="fa fa-user"></i>Register</a></li>
    							<li><a href="login.php"><i class="fa fa-sign-in"></i>Sign In</a></li>
    						</ul>	    					
	    					<ul class="top_nav">
	    						<li><a href="blog-detail.php">News</a></li>
	    						<li><a href="event-detail.php">Event</a></li>
	    						<li><a href="students/login.php">student</a></li>
	    						<li><a href="contactus.php">contact us</a></li>
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
    							<a href="#"><img src="extra-images/logo_2.png" alt=""></a>
    						</div>
    					</div>
    					<div class="col-md-10">
    						<!--kode nav_2 start-->
    						<div class="nav_2" id="navigation">
    							<ul>
    								<li><a href="home.php">home</a></li>
									<li><a href="aboutus.php">About Us</a></li>
		                            <li><a href="#">Event</a>
		                            	<ul>
		                                    <li><a href="our-event.php">our Event</a></li>
		                                    <li><a href="event-list.php">Event List</a></li>
		                                    <li><a href="event-detail.php">Event Detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Blog</a>
		                            	<ul>
		                                    <li><a href="our-blog.php">our Blog</a></li>
		                                                                   </ul>
		                            </li>
		                            <li><a href="#">Books</a>
		                            	<ul>
		                                	<li><a href="our-courses.php">Books and Notes</a></li>
		                     		                                </ul>
		                            </li>
		                            <li><a href="#">Teacher</a>
		                            	<ul>
		                                	<li><a href="our-teacher.php">Our Teacher</a></li>
		                                    <li><a href="our-teacher-details.php">our teacher details</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="gallery-masonary.php">Gallery</a>
		                            	
		                            </li>
									
									<li><a href="#">Contact US</a>
		                            	<ul>
		                                    <li><a href="contactus.php">Contact Us</a></l>
		                                </ul>
		                            </li>
		                            <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li>
    							</ul>
    							<!--DL Menu Start-->
					            <div id="kode-responsive-navigation" class="dl-menuwrapper">
					                <button class="dl-trigger">Open Menu</button>
					                <ul class="dl-menu">
										<li><a href="home.php">home</a></li>
										<li><a href="about-us.php">about us</a></li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Event</a>
					                        <ul class="dl-submenu">
					                           <li><a href="our-event.php">our Event</a></li>
			                                    <li><a href="event-list.php">Event List</a></li>
			                                    <li><a href="event-detail.php">Event Detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Blog</a>
					                        <ul class="dl-submenu">
					                            <li><a href="our-blog.php">our Blog</a></li>
			                                   
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Course</a>
					                        <ul class="dl-submenu">
					                            <li><a href="our-courses.php">Our Course</a></li>
			                                    <li><a href="courses-list.php">Course List</a></li>
			                                	<li><a href="courses-detail.php">Course Detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Teacher</a>
					                        <ul class="dl-submenu">
					                            <li><a href="our-teacher.php">Our Teacher</a></li>
			                                    <li><a href="our-teacher-details.php">our teacher details</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Gallery</a>
					                        <ul class="dl-submenu">
					                            <li><a href="gallery-masonary-2col.php">Masonary 2 Col </a></li>
			                                		                        </ul>
					                    </li>
					                   
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Contact US</a>
					                        <ul class="dl-submenu">
					                            <li><a href="contactus.php">Contact Us 1</a></li>
			                                   </ul>
					                    </li>
					                </ul>
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

        <!--Banner Wrap Start-->
        <div class="kf_inr_banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                        	<div class="inr_banner_heading">
								<h3>Event List</h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Event List</a></li>
								</ul>
							</div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->

    	
    									               
                               <table class="table-bordered">
				<tr>
					<th>Event Name</th>
					<th>Event description</th>
					<th>Date</th>
					<th>Venue</th>
					<th>Fee</th>
					<th>image</th>
					<th>Actions</th>
				</tr>
<?php
	
	$sql="SELECT * FROM event WHERE status='1'";
	
	$qry=mysql_query($sql) or die(mysql_error());
	
	$rw=mysql_num_rows($qry);
	
	if($rw>0){
		
		while($row=mysql_fetch_array($qry)){
			?>
			<tr>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[5]; ?></td>
					<td><?php echo $row[6]; ?></td>
					<td><?php echo $row[8]; ?></td>
					<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" width="50px" height="40px"/>'; ?></td>
					
				<td><!--<a href="editevent.php?id=<?php echo $row[0];?>"><button>Edit</button></a> &nbsp;&nbsp;&nbsp;  -->
				<a href="deleteevent.php?id=<?php echo $row[0];?>"><button>join</button></a></td>
			</tr>
			
			<?php
			
		}
	}else{
		
		echo "no result";
	}
	
	
	?>
                           </table>  

    						
    								</div>
    							</div>
    						</div>
    						<!--EVENT LIST Wrap END-->
    					</div>

    					<!--KF_EDU_SIDEBAR_WRAP START-->
    					<div class="col-md-4">
    						<div class="kf-sidebar">

 

    							
    				</div>
    			</div>
    		</section>		
    		
    	</div>
        <!--Content Wrap End-->
        <!--NEWS LETTERS START-->
        <div class="edu2_ft_topbar_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="edu2_ft_topbar_des">
                            <h5>Subcribe weekly newsletter</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="edu2_ft_topbar_des">
                            <form>
                                <input type="email" placeholder="Enter Valid Email Address">
                                <button><i class="fa fa-paper-plane"></i>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEWS LETTERS END-->
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

                         
        <!--COPYRIGHTS START-->
    </div>
    <!--KF KODE WRAPPER WRAP END-->

    

	<!--Bootstrap core JavaScript-->
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
    <!--COUNTDOWN-->
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>

    
</body>

<!-- Mirrored from kodeforest.net/html/uoe/event-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 08:46:50 GMT -->
</html>
