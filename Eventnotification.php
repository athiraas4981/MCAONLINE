<?php 
include('config.php');
session_start();

	$sqlst="SELECT * FROM staff_det";

	$qryst=mysql_query($sqlst) or die(mysql_error());

	$rwst=mysql_num_rows($qryst);

	if($rwst>0){

		include_once('header.php');
?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-12">

                            </div>
                        </div>
                        <div class="page-header">
                            <blockquote>
                                <blockquote>
                                    <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>                 
                  </span>
                  Event notificatons
                </h3>
                                    <div class="row">
                                        <div class="col-md-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Events Notifications</h4>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tr>
                                                                <td>Name Event</td>
                                                                <td>Event Decription</td>
                                                                <td>Event Image</td>
                                                                <td>Date</td>
                                                                <td>Time</td>
                                                                <td>Venue</td>
                                                            </tr>
                                                            <?php
															
															
		while($rowst=mysql_fetch_array($qryst)){

			$name=$rowst[1];
			$phone=$rowst[3];
			$college=$rowst[4];
			$position=$rowst[5];
		
	
	$sql="SELECT * FROM event WHERE status='0' AND college='$college'";

	$qry=mysql_query($sql) or die(mysql_error());

	$rw=mysql_num_rows($qry);

	if($rw>0){

		while($row=mysql_fetch_array($qry)){
			?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $row[1] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row[2] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row[3] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row[4] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row[5] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row[6] ?>
                                                                    </td>

                                                                    <td>
                                                                        <a href="Eventacceptst.php?id=<?php echo $row[0];?>">
                                                                            <button>Accept</button>
                                                                        </a>
                                                                        <a href="eventdeclinest.php?id=<?php echo $row[0];?>">
                                                                            <button>Decline</button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                        </table>
                                                        <?php

		}
	}

?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <script src="vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <!-- End custom js for this page-->
    </body>

    </html>
    <?php
		}
	}else{
		echo "no result";

	}
	?>