<?php 
include('config.php');
session_start();
$id=$_SESSION['uid'];
$uname=$_SESSION['uname'];

	$sqlst="SELECT * FROM staff_det WHERE id='$id'";
	
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
                  Dashboard
                </h3>
 <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Accepted Students</h4>
                  <div class="table-responsive">
              <table class="table">
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Phone</td>
					<td>College</td>
					<td>Admission Number</td>
					<td>Year of study</td>
					<td>Action</td>
				</tr>
<?php
	
		
		while($rowst=mysql_fetch_array($qryst)){
			$name=$rowst[1];
			$phone=$rowst[3];
			$college=$rowst[4];
			$position=$rowst[5];
		$sql="SELECT * FROM st_reg WHERE status='1' AND college='$college'";
	
	$qry=mysql_query($sql) or die(mysql_error());
	
	$rw=mysql_num_rows($qry);
	
	if($rw>0){
		
		while($row=mysql_fetch_array($qry)){
			?>
			<tr>
					<td><?php echo $row[1] ?></td>
					<td><?php echo $row[2] ?></td>
					<td><?php echo $row[3] ?></td>
					<td><?php echo $row[4] ?></td>
					<td><?php echo $row[5] ?></td>
					<td><?php echo $row[6] ?></td>
				<td><a href="removest.php?id=<?php echo $row[0];?>"><button>Remove Student</button></a></td>
			</tr>
			</table>
			<?php
			
		}
	}
	
	
	?>

</table>
</div>
</div>
</div>
</div></div>
              </blockquote>
            </blockquote>
          </div>
            </div>
            
            </div>
           
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Project Status</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Due Date
                          </th>
                          <th>
                            Progress
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            Jul 01, 2015
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Ronald
                          </td>
                          <td>
                            Jun 05, 2015
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
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