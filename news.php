<?php
  include 'connect.php';


?>
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

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
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
		 <div class="main-slide-image" style="background-image: url(assets/img/newshub.png)"></div>
		 
		 </div>
	   
	   </div>
	 </div>
   </div>
 </section>
			<!-- ============================ Hero Banner End ================================== -->
			<!-- ================================ Tag Award ================================ -->
			<!-- <section class="p-0">
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
			<div class="container">
			<div class="row justify-content-center">
   
    
    <?php
    
    $q="Select * from `news`";
    $res=mysqli_query($con,$q);
    if($res)
        {
          while($r=mysqli_fetch_assoc($res))
            {
              $title=$r['title'];
              $description=$r['description'];
              $photo=$r['photo'];
              $time=$r['time'];
              
              echo '
						
			
			  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				  <div class="blg_grid_box">
					  <div class="blg_grid_thumb">
						  <a ><img src="uploads/news/'.$photo.'" class="img-fluid" alt=""></a>
					  </div>
					  <div class="blg_grid_caption">
						  <!-- <div class="blg_tag"><span>Marketing</span></div> -->
						  <div class="blg_title"><h4>'.$title.'</h4></div>
						  <div class="blg_desc"><p>'.$description.'</p></div>
					  </div>
					  <div class="crs_grid_foot">
						  <div class="crs_flex">
							  <div class="crs_fl_first">
								  <!-- <div class="crs_tutor">
									  <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
								  </div> -->
							  </div>
							  <div class="crs_fl_last">
								  <div class="foot_list_info">
									 	<ul>
										 
										  <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">'.$time.'</div></li>
									  </ul> 
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
			
			  </div>';
            }
        }
    ?>
        
		</div>

</div>
			<!-- ============================ Our Awards Start ================================== -->
			<!-- <section class="p-0">
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
			</section>
<!-- ============================ Footer Start ================================== -->
			<?php
			include 'footer.php';
			?>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			
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
