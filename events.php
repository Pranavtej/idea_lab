
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
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </head>
	
    <body>

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
		<?php	include'banner.php' ;?>
			<!-- <div class="hero_banner image-cover image_bottom">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9 col-md-10 col-sm-12">
							<div class="simple-search-wrap">
								<div class="hero_search-2 text-center">
				
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="assets/img/3.png" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="assets/img/1.png" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="assets/img/2.png" class="d-block w-100" alt="...">
					  </div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Next</span>
					</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	</div>
	in
		 -->
			<!-- Tabs navs -->
			
			<div class="row">
					<div class="container">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h4></h4>
							<div class="custom-tab customize-tab tabs_creative">
								<ul class="nav nav-tabs pb-2 b-0" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Up Comming Events</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Completed Events</a>
									</li>
									
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="container">
   
   <table class="table table-striped">
 <thead>
   <tr>
	 <th scope="col">id</th>
	 <th scope="col">event</th>
	 <th scope="col">title</th>
	 <th scope="col">photo</th>
	 <th scope="col">description</th>
	 <th scope="col">date</th>
	 
   </tr>
 </thead>
 <tbody>
   <?php
   
   $q="Select * from `events`";
   $res=mysqli_query($con,$q);
   if($res)
	   {
		 while($r=mysqli_fetch_assoc($res))
		   {
			 $id=$r['id'];
			 $event=$r['event'];
			 $title=$r['title'];
			 $photo=$r['photo'];
			 $description=$r['description'];
			 $date=$r['date'];
			 echo '<tr>
			 <th scope="row">'.$id.'</th>
			 <td>'.$event.'</td>
			 <td>'.$title.'</td>
			 <td>'.$photo.'</td>
			 <td>'.$description.'</td>
			 <td>'.$date.'</td>
			 <td>
			
			</td>
			 </tr>';
		   }
	   }
   ?>
	   
 </tbody>
</table>

</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										
									<div class="container">
   
   <table class="table table-striped">
 <thead>
   <tr>
	 <th scope="col">id</th>
	 <th scope="col">event</th>
	 <th scope="col">title</th>
	 <th scope="col">photo</th>
	 <th scope="col">description</th>
	 <th scope="col">date</th>
	 
   </tr>
 </thead>
 <tbody>
   <?php
   
   $q="Select * from `events`";
   $res=mysqli_query($con,$q);
   if($res)
	   {
		 while($r=mysqli_fetch_assoc($res))
		   {
			 $id=$r['id'];
			 $event=$r['event'];
			 $title=$r['title'];
			 $photo=$r['photo'];
			 $description=$r['description'];
			 $date=$r['date'];
			 echo '<tr>
			 <th scope="row">'.$id.'</th>
			 <td>'.$event.'</td>
			 <td>'.$title.'</td>
			 <td>'.$photo.'</td>
			 <td>'.$description.'</td>
			 <td>'.$date.'</td>
			 <td>
			
			</td>
			 </tr>';
		   }
	   }
   ?>
	   
 </tbody>
</table>
									</div>
									
								</div>
							</div>
						</div>
						</div>
						</div>
</div>
			<!-- Bootstrap core JavaScript
				================================================== -->
				<!-- Placed at the end of the document so the pages load faster -->
				<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  Tabs content -->
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
