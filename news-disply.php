<?php
 $sqil3 =new mysqli('localhost','root','','idea_lab');
 
 
?>

<?php
    
    $sqil1="Select * from `news`";
    $sqli2=mysqli_query($sqil3,$sqil1);
    if($sqli2)
        {
          while($sqil33=mysqli_fetch_assoc($sqli2))
            {
              $title=$sqil33['title'];
              $description=$sqil33['description'];
              $photo=$sqil33['photo'];
             
              
              
            }
        }
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
			<div class="hero_banner image-cover image_bottom">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9 col-md-10 col-sm-12">
							<div class="simple-search-wrap">
								<div class="hero_search-2 text-center">
				
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="https://pranavtej.github.io/aicte-ideal-lab/assets/img/slider.png" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="https://pranavtej.github.io/aicte-ideal-lab/assets/img/slider.png" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="https://pranavtej.github.io/aicte-ideal-lab/assets/img/slider.png" class="d-block w-100" alt="...">
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
			<!-- ============================ Hero Banner End ================================== -->
			<section>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="blg_grid_box">
								<div class="blg_grid_thumb">
									<a href="blog-detail.html"><img src="assets/img/g-3.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="blg_grid_caption">
									<!-- <div class="blg_tag"><span>Accounting</span></div> -->
									<div class="blg_title"><h4><b><?php echo $title ?></b></h4></div>
									<div class="blg_desc"><p><?php echo $description ?></p></div>
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
												<!-- <ul>
													<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
													<li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
												</ul> -->
											</div>
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
