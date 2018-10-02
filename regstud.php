<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


 <!-- register Modal -->
    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
            	<!--SIGNIN AS USER START-->
                <div class="user-box">
                	<h2>Student Registration</h2>
                    <!--FORM FIELD START-->
					<form action="" method="post">
                    <div class="form">
                        <div class="input-container">
                            <input type="text" name="name" placeholder="Name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="text" name="email" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <input type="text" name="phonenumber" placeholder="Phone number">
                            <i class="fa fa-phone-square"></i>
                        </div>
                        
                         <div class="option">
                        <h5>Student Details</h5>
                    </div>
                       
                       <div class="input-container">
                            <select name="collegelist">
                            <option value="college details">College Details</option>
                            <option value="lmcst">Lourdes Matha College Of Science And Technology</option>
                         	<option value="cet">College Of Engineering And Technology</option>
                         	<option value="mcet">Mohandas College Of Engineering And Technology</option>
                         	<option value="rit">Rajiv Gandhi Institute Of Technology</option>
                         	<option value="ajcet">Amal Jyothi College Of Engineering And Technology</option>
                         	<option value="mes">MES College Of Engineering</option>
                         	</select>
                         </div>
                          <div class="input-container">
                         	<input type="text" name="addmsno" placeholder="Addmission number">
                         </div>
                          <div class="input-container">
                            <select name="yearofstudy">
                            <option value="Year Of Study">Year Of Study</option>
                            <option value="2017-2018">2017-2018</option>
                            <option value="2016-2017">2016-2017</option>
                            <option value="2015-2016">2015-2016</option>
                            <option value="2014-2015">2014-2015</option>
                         	</select>
                         </div>
                       
                        <div class="input-container">
                            <button type="submit" class="btn-style" name="submit">Sign Up</button>
                        </div>
                    </div>
						</form>
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
		<?php
if(isset($_POST['submit']))
{
	
	$v1=$_POST['name'];
	$v2=$_POST['email'];
	$v3=$_POST['password'];
	$v4=$_POST['phonenumber'];
	$v5=$_POST['collegelist'];
	$v6=$_POST['addmsno'];
	$v7=$_POST['yearofstudy'];
	$sql="INSERT INTO reg(name,email,password,phonenumber,collegelist,addmsno,yearofstudy) Values('$v1','$v2','$v3','$v4','$v5','$v6','$v7')";
	mysql_query($sql) OR die(mysql_error());
	 	echo"<script> alert('inserted successfully'); </script>";

}
        
?>
    <!-- register Modal end-->
	<body>
</body>
</html>