<?php

 include 'connect.php';
 if(isset($_POST['register']))
 {
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$regno=$_POST['regno'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$mobile=$_POST['mobile'];
	date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
	$time=date('His');
	$photo=$regno.date("dmY").$time ;
	
    $filename = $_FILES["file"]["name"];

    $tempname = $_FILES["file"]["tmp_name"];  

        $folder = "uploads/registerd/".$photo.".jpeg";   


        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('image inserted successfully')</script>";

        }else{

            echo "<script>alert('image not inserted successfully')</script>";
        }
    

	$query="insert into register(name,dob,reg_no,branch,year,mobile,photo) values('$name','$dob','$regno','$branch','$year','$mobile' ,'$photo')";
	$res=mysqli_query($con,$query);
     if($res)
	 {
		echo "<script>alert('Data inserted successfully')</script>";
	 }
	 else
	 {
		echo "<script>alert('Data NOT inserted successfully')</script>";
	 }
	}
 ?>

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Themezhub">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aicte -idea Lab </title>
		 
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
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Login Wrap ================================== -->
			<section>
				<div class="container">
					<div class="row justify-content-center">
					
						<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
							<form method="POST"  enctype="multipart/form-data">
								<div class="crs_log_wrap">
									<div class="crs_log__thumb">
										<img src="assets/img/sample.png" class="img-fluid" alt="">
									</div>
									<div class="crs_log__caption">
										<div class="rcs_log_123">
											<div class="rcs_ico"><i class="fas fa-user"></i></div>
										</div>
										
										<div class="rcs_log_124">
											<div class="Lpo09"><h4>Registration Form</h4></div>
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" class="form-control" placeholder="Enter your Full Name" required>
											</div>
											<div class="form-group">
												<label>Date Of Birth</label>
												<input type="date" name="dob"class="form-control" placeholder="Enter your Date Of Birth" required>
											</div>
											<div class="form-group">
												<label>Registration Number</label>
												<input type="text" name="regno"  class="form-control" placeholder="Enter your Register number" required>
											</div>
											<label>Branch</label>
											<select name="branch"name="branch" class="form-control"  id="branch" required>
												<option value="0" >Select Branch</option>
												<option value="CSE">CSE</option>
                                                <option value="IT">IT</option>
                                                <option value="AI&DS">AI&DS</option>
                                                <option value="CSBS">CSBS</option>
												<option value="CSD">CSD</option>
												<option value="ECE">ECE</option>
												<option value="EEE">EEE</option>
												<option value="CIVIL">CIVIL</option>
												<option value="MECH">MECH</option>
                                               </select>
										    <div class="form-group">
											   <label>Year</label>
											<select name="year" name="year" class="form-control"  id="year" required>
											<option value="0" >Select Year</option>
											<option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                               </select>
                                            </div>
											<div class="form-group">
												<label>Mobile</label>
												<input type="number"name="mobile" class="form-control" placeholder="Enter your Mobile Number" required>
											</div>
                                            <!-- <input type="file" name="file" id="file" />    -->
                                            <button id="start-camera">Capture Signature</button>
                                                <video id="video" width="320" height="240" autoplay></video>
                                                <style>
                                                    #video {
    display: none;
   
}
                                                    #click-photo {
    display: none;
}
 

                                                    </style>
                                                <button id="click-photo">Click Photo</button>
                                                <div id="dataurl-container">
    <canvas id="canvas" width="320" height="240"></canvas>
    <!-- <div id="dataurl-header">Image Data URL</div> -->
    <!-- <textarea id="dataurl" readonly></textarea> -->
</div>

											<div class="form-group">
												<button type="submit" name="register" class="btn btn-primary">Register</button>
											</div>
										</div>
										
									</div>
									
							</form>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Login Wrap ================================== -->
			<script>
let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
let dataurl = document.querySelector("#dataurl");
let dataurl_container = document.querySelector("#dataurl-container");

camera_button.addEventListener('click', async function() {
   	let stream = null;

    try {
    	stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    }
    catch(error) {
    	alert(error.message);
    	return;
    }

    video.srcObject = stream;

    video.style.display = 'block';
    camera_button.style.display = 'none';
    click_button.style.display = 'block';
});

click_button.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');
    
    dataurl.value = image_data_url;
    
    dataurl_container.style.display = 'block';
});

</script>
    


			<!-- ============================ Footer Start ================================== -->
			<?php
			 include 'footer.php';
			 ?>
			<!-- ============================ Footer End ================================== -->
			
			
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