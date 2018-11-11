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
		                                	<li><a href="addnote.php">Add Notes</a></li>
											<li><a href="viewnote.php">Notes list</a></li>
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
<?php
include('config.php');
session_start();
$st_id=$_SESSION['uid'];

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
    								<li><a href="home.php">home</a></li>
									<li><a href="#">Event</a>
		                            	<ul>
		                                    <li><a href="our-event.html">Add Events</a></li>
		                                    <li><a href="event-list.html">Event List</a></li>
		                                    
		                                </ul>
		                            </li>
		                            <li><a href="#">Books</a>
		                            	<ul>
		                                   <li><a href="our-event.html">Add Books</a></li>
		                                    <li><a href="event-list.html">Event List</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Notes</a>
		                            	<ul>
		                                	<li><a href="our-courses.html">Add Notes</a></li>
											<li><a href="courses-list.html">Note List</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Logout</a></li>
		                            <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li>
    							</ul>
    							<!--DL Menu Start-->
					            <div id="kode-responsive-navigation" class="dl-menuwrapper">
					                <button class="dl-trigger">Open Menu</button>
					                <ul class="dl-menu">
										<li><a href="home.php">home</a></li>
									<li><a href="#">Event</a>
		                            	<ul>
		                                    <li><a href="our-event.html">Add events</a></li>
		                                    <li><a href="event-list.html">Event List</a></li>
		                                    
		                                </ul>
		                            </li>
		                            <li><a href="#">Books</a>
		                            	<ul>
		                                   <li><a href="our-event.html">Add events</a></li>
		                                    <li><a href="event-list.html">Event List</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Notes</a>
		                            	<ul>
		                                	<li><a href="our-courses.html">Books and Notes</a></li>
											<li><a href="courses-list.html">Course List</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Logout</a></li>
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

<!--Content Wrap Start-->
    	<div class="kf_content_wrap">
    		<!--ABOUT UNIVERSITY START-->
    		<section>
    			<div class="container">
    				<div class="row">

    				<div class="col-md-8">
                              
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="contact_des">
                                        <h4>Add Books</h4>
                                         <div class="inputs_des des_2">
                                           <input type="text" name="book_name" placeholder="Book Name"><i class="fa fa-user"></i>
                                        </div>
                                        
                                        <div class="inputs_des des_2">
                                            <textarea name="book_desc" placeholder="Book description"></textarea><i class="fa fa-mail-forward"></i>
                                        </div>
                                        
                                        <div class="inputs_des des_2">
                                            <input type="text" name="price" placeholder="Book Price"><i class="fa fa-mail-forward"></i>
                                        </div>
                                        
                                        <div class="inputs_des des_2">
                                            <input type="file" name="fileToUpload" id="fileToUpload"><i class="fa fa-phone"></i>
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
	
if(isset($_POST['addskill']))	{
	
	
$name=$_POST['book_name'];
$content=$_POST['book_desc'];
$price=$_POST['price'];
$img=addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
//$fileToUpload=$_POST['fileToUpload'];
$v="insert into bookes (st_id,book_name,Book_content,price,image) values('$st_id','$name','$content','$price','$img')" ;
$m=mysql_query($v) or die(mysql_error());
	
	echo "<meta http-equiv='refresh' content='0;url=viewbooks.php'>";
}
?>



