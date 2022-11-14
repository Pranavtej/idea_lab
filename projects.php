<?php include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Themezhub">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aicte -Ideal Lab </title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		<link  href="assets/css/leaderboard.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </head>
	
    <body>

        <?php
		include 'menu.php';
		?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<?php include 'banner.php'; ?>
     
	 <section class="banner-main">
   <div class="banner-content">
	 <div class="slider banner-slider">
	   <div class="h2-slider-list">
		 <div class="main-slide-image" style="background-image: url(assets/img/projects.jpeg)"></div>
		 
		 </div>
	   
	   </div>
	 </div>
   </div>
 </section>
			<!-- ============================ Hero Banner End ================================== -->
			<!-- ================================ Tag Award ================================ -->
			<!---- <section class="p-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="crp_box fl_color ovr_top">
								<div class="row align-items-center">
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
										<div class="dro_140">
											<div class="dro_141 de"><i class="fa fa-journal-whills"></i></div>
											<div class="dro_142">
												<h6>200+ Students</h6>
												<p>Body of Aicete ideal Lab</p>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
										<div class="dro_140">
											<div class="dro_141 de"><i class="fa fa-business-time"></i></div>
											<div class="dro_142">
												<h6>Lifetime Access</h6>
												<p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
										<div class="dro_140">
											<div class="dro_141 de"><i class="fa fa-user-shield"></i></div>
											<div class="dro_142">
												<h6>800k+ Enrolled</h6>
												<p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</section> -->
			<!-- ================================ Tag Award ================================ -->
			
			<!-- ============================ Our Awards Start ================================== -->
			<!----<section class="p-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="crp_box ovr_top">
								<div class="row align-items-center m-0">
									<div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
										<div class="crp_tags"><h6>Over 700+ Cources in one place</h6></div>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
										<div class="part_rcp">
											<ul>
												<li><div class="crp_img"><img src="assets/img/lg-1.png" class="img-fluid" alt=""></div></li>
												<li><div class="crp_img"><img src="assets/img/lg-5.png" class="img-fluid" alt=""></div></li>
												<li><div class="crp_img"><img src="assets/img/lg-6.png" class="img-fluid" alt=""></div></li>
												<li><div class="crp_img"><img src="assets/img/lg-7.png" class="img-fluid" alt=""></div></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>-->
			<!-- ================================Patent cards ================================-->
			<section class="gray">
														<div class="container">
													<div class="row justify-content-center">
														
																
																<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
																	<div class="sec-heading center">
																		<h2> <span class="theme-cl">Projects List</span></h2>
																		<p>AICTE IDEA labs to foster creativity, experiential
																			learning on campus patents 
																			</p>
																	</div>
																	<div class="row justify-content-center">
																		<?php
			
			$q="Select * from `projects`";
   $res=mysqli_query($con,$q);
   if($res)
	   {
			while($row=mysqli_fetch_assoc($res))
                                            {
												$id=$row['project_id'];
              $pr_name=$row['project_name'];
              $pb_name=$row['publisher_name'];
              $date=$row['date'];
			  $author=$row['author'];
			  $approved_by=$row['approved_by'];
                                                        echo'
																	<div class="crs_grid_list">
																		
																		<div class="crs_grid_list_thumb">
																			<a ><img src="assets/img/project.png.png" class="img-fluid rounded" alt=""></a>
																		</div>
																		
																		<div class="crs_grid_list_caption">
																			<div class="crs_lt_101">
																				<span class="est st_1">project Id :'.$id.'</span>
																				<!-- <span class="est st_2">Technology</span> -->
																			</div>
																			
																			<div class="crs_lt_102">
																				<h2 ="crs_tit">'.$pr_name.'</h2>
																				<h6>Published By :<span class="crs_auth">'.$pb_name.'</span></h6>
																			   <h6> Publish date : <span class="crs_auth">'.$date.'</span></h6>
																				<h6>Authors :<span class="crs_auth">'.$author.'</span><br></h6>
																			   <h6> Approval By  : <span class="crs_auth">'.$approved_by.'</span></h6>
										
																				
																			</div>
																			
																			
																		</div>
																		
																	</div>
																	</div>
																	';
                                                    }
												}
													?>
													</section>
            

<!-- ============================ Footer Start ================================== -->
			<?php
			include 'footer.php';
			?>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content overli" id="loginmodal">
						<div class="modal-header">
							<h5 class="modal-title">Login Your Account</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
							</button>
						  </div>
						<div class="modal-body">
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="User or email">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group row">
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="admin" class="checkbox-custom" name="admin" type="checkbox">
											<label for="admin" class="checkbox-custom-label">Admin</label>
										</div>
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="student" class="checkbox-custom" name="student" type="checkbox" checked="">
											<label for="student" class="checkbox-custom-label">Student</label>
										</div>
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="instructor" class="checkbox-custom" name="instructor" type="checkbox">
											<label for="instructor" class="checkbox-custom-label">Tutors</label>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width theme-bg text-white">Login</button>
									</div>
									
									<div class="rcs_log_125 pt-2 pb-3">
										<span>Or Login with Social Info</span>
									</div>
									<div class="rcs_log_126 full">
										<ul class="social_log_45 row">
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
										</ul>
									</div>
								
								</form>
							</div>
						</div>
						<div class="crs_log__footer d-flex justify-content-between mt-0">
							<div class="fhg_45"><p class="musrt">Don't have account? <a href="signup.html" class="theme-cl">SignUp</a></p></div>
							<div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.js"></script> 
		<script src="assets/js/summernote.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>	
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>
