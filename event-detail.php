<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/uoe/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 08:45:05 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Event Detail</title>

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
					                            <li><a href="gallery-masonary.php">Masonary 2 Col </a></li>
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
								<h3>Event Detail</h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Event Detail</a></li>
								</ul>
							</div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->

    	<!--Content Wrap Start-->
    	<div class="kf_content_wrap">
    		<section>
    			
				<div class="container">
					<div class="row">
						<div class="col-md-8">

							<!--EVENT CONVOCATION OUTER Wrap START-->
							<div class="kf_convocation_outer_wrap">	
								<div class="convocation_slider">

									<div id="owl-demo-23" class="owl-carousel owl-theme">

										<div class="item"><figure><img src="extra-images/event_detail.jpg" alt=""/></figure></div>
										<div class="item"><figure><img src="extra-images/event_detail2.jpg" alt=""/></figure></div>
										<div class="item"><figure><img src="extra-images/event_detail3.jpg" alt=""/></figure></div>

									</div>
								</div>

								<!--EVENT CONVOCATION  Wrap START-->
								<div class="kf_convocation_wrap">
									<h4><span>Convocation</span> for Gradute Students</h4>
									<ul class="convocation_timing">
										<li><i class="fa fa-calendar"></i>14 Nov, 2015</li>
										<li><i class="fa fa-clock-o"></i>10:00 am - 04:00 pm</li>
									</ul>

									<!--EVENT CONVOCATION DES START-->
									<div class="kf_convocation_des">
										<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</h5>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum.</p>

										<h5>Convocation Day information</h5>
										<p>Join our team for this event we will support you all the way, providing training and fundraising tips.</p>
										<a href="#"><i class="fa fa-plus"></i>Google Calender</a>
										<a href="#"><i class="fa fa-plus"></i>Local Expert</a>

										<!--EVENT CONVOCATION MAP  Wrap START-->
										<div class="kf_convocation_map">
											<div id="map-canvas" class="map-canvas"></div>
											<a class="convocation_link" href="#">Details</a>
											<a class="convocation_link" href="#">Organizer</a>
											<a class="convocation_link" href="#">Venue</a>
										</div>
										<!--EVENT CONVOCATION MAP  Wrap END-->

									</div>
									<!--EVENT CONVOCATION DES END-->

								</div>
								<!--EVENT CONVOCATION  Wrap END-->

								<!--EVENT SPEAKER Wrap START-->
								<div class="kf_event_speakers">
									<div class="heading_5">
										<h4><span>Event</span> Speakers</h4>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<div class="kf_event_speakers_des">
												<figure><img src="extra-images/event-sp.jpg" alt=""/></figure>
												<h5><a href="#">Jim Taylor</a></h5>
												<p>Speaker</p>
											</div>
										</div>

										<div class="col-md-4 col-sm-4">
											<div class="kf_event_speakers_des">
												<figure><img src="extra-images/event-sp2.jpg" alt=""/></figure>
												<h5><a href="#">Alberta Doe</a></h5>
												<p>Speaker</p>
											</div>
										</div>

										<div class="col-md-4 col-sm-4">
											<div class="kf_event_speakers_des">
												<figure><img src="extra-images/event-sp3.jpg" alt=""/></figure>
												<h5><a href="#">Jim Taylor</a></h5>
												<p>Speaker</p>
											</div>
										</div>
									</div>
								</div>
								<!--EVENT SPEAKER Wrap End-->

								<!--EVENT GALLERY Wrap STAT-->
								<div class="kf_event_gallery">
									<div class="heading_5">
										<h4><span>Event</span> Gallery</h4>
									</div>
									<ul class="event_gallery_des">
										<li><a href="#"><img src="extra-images/event_gallery1.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery2.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery3.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery4.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery5.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery6.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery7.jpg" alt=""/></a></li>
										<li><a href="#"><img src="extra-images/event_gallery8.jpg" alt=""/></a></li>
									</ul>
									<a class="event_link next" href="#">NEXT EVENT<i class="fa fa-angle-right"></i></a>
									<a class="event_link prev" href="#"><i class="fa fa-angle-left"></i>PREVIOUS EVENT</a>
								</div>
								<!--EVENT GALLERY Wrap End-->

							</div>
							<!--EVENT CONVOCATION OUTER Wrap END-->

						</div>

						<!--KF_EDU_SIDEBAR_WRAP START-->
    					<div class="col-md-4">
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
    										<a href="#"><i class="fa fa-angle-right"></i>January</a>
    									</li>
    									<li>
    										<a href="#"><i class="fa fa-angle-right"></i>February</a>
    									</li>
    									<li>
    										<a href="#"><i class="fa fa-angle-right"></i>March</a>
    									</li>
    									<li>
    										<a href="#"><i class="fa fa-angle-right"></i>April</a>
    									</li>
    									<li>
    										<a href="#"><i class="fa fa-angle-right"></i>May</a>
    									</li>
    								</ul>
    							</div>
    							<!--KF_SIDEBAR_ARCHIVE_WRAP END-->


    							<!--KF SIDEBAR RECENT POST WRAP START-->
    							<div class="widget widget-recent-posts">
    								<h2>Recent Posts</h2>
    								<ul class="sidebar_rpost_des">
                                    	<!--LIST ITEM START-->
                                   		<li>
                                            <figure>
                                            	<img src="extra-images/archive-1.jpg" alt="">
                                                <figcaption><a href="#"><i class="fa fa-search-plus"></i></a></figcaption>
                                            </figure>
                                            <div class="kode-text">
                                                <h6><a href="#">Lorem ipsum dolor sit amet sint occaecat cupidatat</a></h6>
                                                <span><i class="fa fa-clock-o"></i>10 Jan, 2016</span>
                                            </div>
    									</li>
                                        <!--LIST ITEM START-->
										<!--LIST ITEM START-->
                                   		<li>
                                            <figure>
                                            	<img src="extra-images/archive-2.jpg" alt="">
                                                <figcaption><a href="#"><i class="fa fa-search-plus"></i></a></figcaption>
                                            </figure>
                                            <div class="kode-text">
                                                <h6><a href="#">Lorem ipsum dolor sit amet sint occaecat cupidatat</a></h6>
                                                <span><i class="fa fa-clock-o"></i>10 Jan, 2016</span>
                                            </div>
    									</li>
                                        <!--LIST ITEM START-->
                                        <!--LIST ITEM START-->
                                   		<li>
                                            <figure>
                                            	<img src="extra-images/archive-3.jpg" alt="">
                                                <figcaption><a href="#"><i class="fa fa-search-plus"></i></a></figcaption>
                                            </figure>
                                            <div class="kode-text">
                                                <h6><a href="#">Lorem ipsum dolor sit amet sint occaecat cupidatat</a></h6>
                                                <span><i class="fa fa-clock-o"></i>10 Jan, 2016</span>
                                            </div>
    									</li>
                                        <!--LIST ITEM START-->
    								</ul>
    							</div>
    							<!--KF SIDEBAR RECENT POST WRAP END-->

    							<!--KF EDU SIDEBAR COURSES CATEGORieS WRAP START-->
	    						<div class="widget widget-categories">
	    							<h2>categories</h2>
									<ul>
										<li><a href="#"><i class="fa fa-caret-right"></i>Business &amp; Economics</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i>Politics &amp; History</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i>Medical Sciences &amp; Health</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i>Fine Arts</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i>Tourism &amp; Culture</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i>Sports</a></li>
									</ul>
	    						</div>
	    						<!--KF EDU SIDEBAR COURSES CATEGORieS WRAP END-->

	    						<!--KF SIDE BAR COURSES LIST WRAP START WRAP START-->
	    						<div class="widget widget-courses-list">
	    							<h2>Latest Courses</h2>
	    							<ul>
	    								<li>
                                        	<figure>
                                            	<img src="extra-images/courseslist1.jpg" alt=""/>
	    										<a href="#">View Detail</a>
	    									</figure>
	    								</li>

	    								<li>
                                        	<figure>
                                            	<img src="extra-images/courseslist2.jpg" alt=""/>
	    										<a href="#">View Detail</a>
	    									</figure>
	    								</li>

	    								<li>
                                        	<figure>
                                            	<img src="extra-images/courseslist3.jpg" alt=""/>
	    										<a href="#">View Detail</a>
	    									</figure>
	    								</li>

	    								<li>
                                        	<figure>
                                            	<img src="extra-images/courseslist4.jpg" alt=""/>
	    										<a href="#">View Detail</a>
	    									</figure>
	    								</li>

	    								<li>
                                        	<figure>
                                            	<img src="extra-images/courseslist5.jpg" alt=""/>
	    										<a href="#">View Detail</a>
	    									</figure>
	    								</li>

	    								<li>
                                        	<figure>
                                            	<img src="extra-images/courseslist6.jpg" alt=""/>
	    										<a href="#">View Detail</a>
	    									</figure>
	    								</li>
	    							</ul>
	    						</div>
	    						<!--KF SIDE BAR COURSES LIST WRAP START WRAP END-->

	    						<!--KF SIDE BAR TAG CLOUD WRAP START-->
	    						<div class="widget widget-tag-cloud">
	    							<h2>Tags Cloud</h2>
	    							<ul>
	    								<li><a href="#">Science</a></li>
	    								<li><a href="#">Development</a></li>
	    								<li><a href="#">Fine Arts</a></li>
	    								<li><a href="#">Research</a></li>
	    								<li><a href="#">Admissions</a></li>
	    								<li><a href="#">PHD</a></li>
	    								<li><a href="#">History &amp; Politics</a></li>
	    								<li><a href="#">Sports</a></li>
	    							</ul>

	    						</div>
	    						<!--KF SIDE BAR TAG CLOUD WRAP END-->

    						</div>
    					</div>
						<!--KF EDU SIDEBAR WRAP END-->

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
	<!--Map-->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<!--select menu-->
	<script src="js/jquery.selectric.min.js"></script>
	<!--Side Menu-->
	<script src="js/jquery.sidr.min.js"></script>
	<!--Custom JavaScript-->
	<script src="js/custom.js"></script>

    
</body>

<!-- Mirrored from kodeforest.net/html/uoe/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 08:45:32 GMT -->
</html>
