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
			<div class="text-center"><h2>Patent Details</h2></div>
			<div class="container"> 
			<div class="container">
   
   <table class="table table-striped">
 <thead>
   <tr>
	 <th scope="col">patent_status</th>
	 <th scope="col">applicant_id</th>
	 <th scope="col">applicant_no</th>
	 <th scope="col">	reciept_of_cbr</th>
	 <th scope="col">date</th>
	 
   </tr>
 </thead>
 <tbody>
   <?php
   
   $q="Select * from `patents`";
   $res=mysqli_query($con,$q);
   if($res)
	   {
		 while($r=mysqli_fetch_assoc($res))
		   {
			 $patent_status=$r['patent_status'];
			 $applicant_id=$r['applicant_id'];
			 $applicant_no=$r['applicant_no'];
			 $reciept_of_cbr=$r['reciept_of_cbr'];
			 $date=$r['date'];
			 echo '<tr>
			 <th scope="row">'.$patent_status.'</th>
			 <td>'.$applicant_id.'</td>
			 <td>'.$applicant_no.'</td>
			 <td>'.$reciept_of_cbr.'</td>
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
<!-- ============================ Footer Start ================================== -->
			<?php
			include 'footer.php';
			?>
			<!-- ============================ Footer End ================================== -->
			
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
