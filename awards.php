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
		
		<link  href="assets/css/plugin.css">
		<link  href="assets/css/temp.css">
		<link  href="assets/css/temp-bot.css">



		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
		
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
            <div class="main-slide-image" style="background-image: url(assets/img/awards.jpeg)"></div>
            
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
			
			<!-- ============================ Our Awards Start ================================== -->
			<!-- <div class="row"> -->
      <div class="container">
      
      
      <table class="table table-striped">
 <thead>
   <tr>
	 <th scope="col">Id</th>

	 <th scope="col">Title</th>
	 <th scope="col">Organisation</th>
	 <th scope="col">Type</th>
	 <th scope="col">Given</th>
	 
   </tr>
 </thead>
 <tbody>
   <?php
   
   $q="Select * from `awards`";
   $res=mysqli_query($con,$q);
   if($res)
	   {
		 while($r=mysqli_fetch_assoc($res))
		   {
			 $id=$r['id'];
			 $title=$r['title'];
			 $org=$r['organisation'];
			 $type=$r['type'];
			 $given=$r['given'];
			 echo '<tr>
			 <th scope="row">'.$id.'</th>
		
			 <td>'.$title.'</td>

			 <td>'.$type.'</td>
			 <td>'.$given.'</td>
			 <td>
			
			</td>
			 </tr>';
		   }
	   }
   ?>
	   
 </tbody>
</table>
    </div>
    <!-- </div> -->

	<!-- ============================ Footer Start ================================== -->
			<?php
			include 'footer.php';
			?>
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
		<script src="assets/js/custom-swiper.js"></script>
		<script src="assets/js/custom-pluggin.js"></script>
		<script src="assets/js/custom-main.js"></script>
		<script src="assets/js/custom-nav.js"></script>
		
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>
