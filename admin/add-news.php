<?php session_start();

include '../connect.php';

if(empty($_SESSION['name']))
{
	header(location: "index.php");
}
$name=$_SESSION['name'];
$deg=$_SESSION['deg'];
$photo_admin=$_SESSION['photo_admin'];

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$title=$_POST['title'];
	$desc=$_POST['desc'];
	// $image=$_POST['image'];
	date_default_timezone_set("Asia/Calcutta");  
    $time=date('His');

	// $q="INSERT INTO `news`(`id`,`title`, `description`, `photo` ) VALUES ('$id','$title','$desc','$image')";
	$res=mysqli_query($con,$q);
	$image = $_FILES['image']['name'];
    $tmp_ = $_FILES['image']['tmp_name'];
   $fname = explode('.', $_FILES['image']['name']);
    $v=$id.'.'.$fname[1] ;
    move_uploaded_file($tmp_,"uploads/news/$v");
	$q="INSERT INTO `news`(`id`,`title`, `description`, `photo` ) VALUES ('$id','$title','$desc','$v')";
	if($res){
									
		echo "<script type='text/javascript'>alert('Details added successfully')</script>";
			}
	else{
		echo "<script type='text/javascript'>alert('Error: Failled to add details')</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
		 
        <!-- Custom CSS -->
        <link href="../assets/css/styles.css" rel="stylesheet">
		
    </head>
	
    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="../assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									
								<li class="account-drop">
									<a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">new</i></span>
									</a>
									<div class="dropdown-menu pull-right animated flipInX">
										<div class="drp_menu_headr bg-warning">
										<h4>	Notifications</h4>
										</div>
											<?php 
											date_default_timezone_set("Asia/Calcutta");  
											$ct=date('Y-m-d');
											$std="select regno,intime,out_time from log where intime like '$ct%' and out_time='---' limit 5";
											$res=mysqli_query($con,$std);
											
										while($result=mysqli_fetch_assoc($res))
										{
											$reg=$result['regno'];
										
											 $intime=$result['intime'];
											 $outtime=$result['out_time'];
										echo'
										<div class="ground-list ground-hover-list">
											<div class="ground ground-list-single">
												<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
													<div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
												</div>

												<div class="ground-content">
													<h6><a href="#">'.$reg.'</a></h6>
													<small class="text-fade">'.$intime.'</small>
													<span class="small">Loged into Lab Just Now</span>
												</div>
											</div>
											</div>';
										}
											?>		
								</li>
									<li>
										<div class="btn-group account-drop">
											<a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img src="../<?php echo $photo_admin; ?>" class="avater-img" alt="">
											</a>
											<div class="dropdown-menu pull-right animated flipInX">
												<div class="drp_menu_headr">
													<h4>Hi, <?php echo $name ; ?></h4>
												</div>
												<ul>
													<li><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>                                  
													<li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
													<li><a href="manage-course.html"><i class="fas fa-shopping-basket"></i>Manage Courses<span class="notti_coun style-2">7</span></a></li>
													<li><a href="manage-instructor.html"><i class="fas fa-toolbox"></i>Manage Instructor</a></li>
													<li><a href="manage-students.html"><i class="fa fa-envelope"></i>Manage Students<span class="notti_coun style-3">3</span></a></li>
													<li><a href="messages.html"><i class="fas fa-comments"></i>Messages</a></li>
													<li><a href="login.html"><i class="fa fa-unlock-alt"></i>Sign Out</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- <div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a href="#">Home<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.html">Home 1</a></li>
										<li><a href="home-2.html">Home 2</a></li>
										<li><a href="home-3.html">Home 3</a></li>
										<li><a href="home-4.html">Home 4</a></li>
										<li><a href="home-5.html">Home 5</a></li>
										<li><a href="home-6.html">Home 6</a></li>
										<li><a href="home-7.html">Home 7</a></li>
									</ul>
								</li>
								
								<li><a href="#">Courses<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="#">Search Courses in Grid<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="grid-layout-with-sidebar.html">Grid Layout Style 1</a></li>
												<li><a href="grid-layout-with-sidebar-2.html">Grid Layout Style 2</a></li>
												<li><a href="grid-layout-with-sidebar-3.html">Grid Layout Style 3</a></li>
												<li><a href="grid-layout-with-sidebar-4.html">Grid Layout Style 4</a></li>
												<li><a href="grid-layout-with-sidebar-5.html">Grid Layout Style 5</a></li>
												<li><a href="grid-layout-full.html">Grid Full Width</a></li>
												<li><a href="grid-layout-full-2.html">Grid Full Width 2</a></li>
												<li><a href="grid-layout-full-3.html">Grid Full Width 3</a></li>
											</ul>
										</li>
										<li><a href="#">Search Courses in List<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="list-layout-with-sidebar.html">List Layout Style 1</a></li>
												<li><a href="list-layout-with-full.html">List Full Width</a></li>
											</ul>
										</li>
										<li><a href="#">Courses Detail<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="course-detail.html">Course Detail 01</a></li>
												<li><a href="course-detail-2.html">Course Detail 02</a></li>
												<li><a href="course-detail-3.html">Course Detail 03</a></li>
												<li><a href="course-detail-4.html">Course Detail 04</a></li>
											</ul>
										</li>
										
										<li><a href="explore-category.html">Explore Category</a></li>
										<li><a href="find-instructor.html">Find Instructor</a></li>
										<li><a href="instructor-detail.html">Instructor Detail</a></li>
									</ul>
								</li>
								
								<li><a href="#">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="#">Shop Pages<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="shop-with-sidebar.html">Shop Sidebar Left</a></li>
												<li><a href="shop-with-right-sidebar.html">Shop Sidebar Right</a></li>
												<li><a href="list-shop-with-sidebar.html">Shop List Style</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="product-detail.html">Product Detail</a></li>
											</ul>
										</li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="contact.html">Say Hello</a></li>
										<li><a href="blogs.html">Blog Style</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="component.html">Elements</a></li>
										<li><a href="faq.html">FAQs</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="signup.html">Signup</a></li>
										<li><a href="forgot.html">Forgot</a></li>
									</ul>
								</li>
								
								<li class="active"><a href="dashboard.html">Dashboard</a></li>
								
							</ul>
							 -->
							<ul class="nav-menu nav-menu-social align-to-right">
								
								
								<li class="account-drop">
									<a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">new</i></span>
									</a>
									<div class="dropdown-menu pull-right animated flipInX">
										<div class="drp_menu_headr bg-warning">
										<h4>	Notifications</h4>
										</div>
											<?php 
											date_default_timezone_set("Asia/Calcutta");  
											$ct=date('Y-m-d');
											$std="select regno,photo,intime,out_time from log where intime like '$ct%' and out_time='---' limit 5";
											$res=mysqli_query($con,$std);
											
										while($result=mysqli_fetch_assoc($res))
										{
											$reg=$result['regno'];
											$photo=$result['photo'];
											 $intime=$result['intime'];
											 $outtime=$result['out_time'];
										echo'
										<div class="ground-list ground-hover-list">
											<div class="ground ground-list-single">
												<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
													<div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
												</div>

												<div class="ground-content">
													<h6><a href="#">'.$reg.'</a></h6>
													<small class="text-fade">'.$intime.'</small>
													<span class="small">Loged into Lab Just Now</span>
												</div>
											</div>
											</div>';
										}
											?>		
								</li>
								<li>
										<div class="btn-group account-drop">
											<a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img src="../<?php echo $photo_admin; ?>" class="avater-img" alt="">
											</a>
											<div class="dropdown-menu pull-right animated flipInX">
												<div class="drp_menu_headr">
													<h4>Hi, <?php echo $name ; ?></h4>
												</div>
												<ul>
													<li><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>                                  
													<li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
													<!-- <li><a href="manage-course.html"><i class="fas fa-shopping-basket"></i>Manage Courses<span class="notti_coun style-2">7</span></a></li>
													<li><a href="manage-instructor.html"><i class="fas fa-toolbox"></i>Manage Instructor</a></li>
													<li><a href="manage-students.html"><i class="fa fa-envelope"></i>Manage Students<span class="notti_coun style-3">3</span></a></li>
													<li><a href="messages.html"><i class="fas fa-comments"></i>Messages</a></li> -->
													<li><a href="login.html"><i class="fa fa-unlock-alt"></i>Sign Out</a></li>
												</ul>
											</div>
										</div>
									</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Dashboard: Dashboard Start ================================== -->
			<section class="gray pt-4">
				<div class="container-fluid">
										
					<div class="row">
					
						<div class="col-lg-3 col-md-3">
							<div class="dashboard-navbar">
								
								<div class="d-user-avater">
									<img src="../<?php echo $photo_admin	 ?>" class="img-fluid avater" alt="">
									<h4><?php echo $name ?></h4>
									<span><?php echo $deg ?></span>
									<div class="elso_syu89">
										<ul>
											
										</ul>
									</div>
									<div class="elso_syu77">
										<div class="one_third"><div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div><span>Ratings</span></div>
										<div class="one_third"><div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i></div><span>Courses</span></div>
										<div class="one_third"><div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div><span>My Profile</span></div>
									</div>
								</div>
								<?php include 'menu-dashboard.php' ;?>
						
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
										</ol>
									</nav>
								</div>
							</div>
							
							<?php include 'stat.php'; ?>
							<!-- /Row -->
							<!-- /Row -->
							
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card">
							<!-- form startRow -->
                            <form method="POST">
                            <div class="col-lg-12 col-md-12 col-sm-12">
										<h3 class="ml-0">ADD NEWS</h3>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label>News Id<i class="req">*</i></label>
											<input type="text" name="id" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label>Title<i class="req">*</i></label>
											<input type="text" name="title" class="form-control">
										</div>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label>Description</label>
											<textarea name="desc" class="form-control ht-50"></textarea>
										</div>
									</div>
									
                                        <label>Select Image File:</label>
                                        <input type="file" name="image">
                                    
								</div>
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</form>
							<!-- form end Row -->
									
									</div>
								</div>
							</div>
							
							<!-- Row -->
							<!-- Row -->
							
							<!-- /Row -->
							
						</div>
					
					</div>
					
				</div>
			</section>
			<!-- ============================ Dashboard: Dashboard End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			<!-- <section class="theme-bg call_action_wrap-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call_action_wrap">
								<div class="call_action_wrap-head">
									<h3>Do You Have Questions ?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								<a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
							</div>
							
						</div>
					</div>
				</div>
			</section> -->
			<!-- ============================ Call To Action End ================================== -->
			
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
											<input id="student" class="checkbox-custom" name="student" type="checkbox" checked>
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
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/popper.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/slick.js"></script>
		<script src="../assets/js/moment.min.js"></script>
		<script src="../assets/js/daterangepicker.js"></script> 
		<script src="../assets/js/summernote.min.js"></script>
		<script src="../assets/js/metisMenu.min.js"></script>	
		<script src="../assets/js/custom.js"></script>
		
		<!-- Morris.js charts -->
		<script src="../assets/js/raphael.min.js"></script>
		<script src="../assets/js/morris.min.js"></script>
		
		<!-- Custom Morrisjs JavaScript -->
		<script src="../assets/js/morris.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>