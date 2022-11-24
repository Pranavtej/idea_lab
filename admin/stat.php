<div class="row">
						<?php
						date_default_timezone_set("Asia/Calcutta");  
						$ct=date('Y-m-d H');
						$c="select count(regno) as count from log where intime like '$ct%' and out_time='---' ";
						$re=mysqli_query($con,$c);
						$r=mysqli_fetch_assoc($re);
		
						//date_default_timezone_set("Asia/Calcutta");  
						//$ct=date('Y-m-d H');
						$total="select count(reg_no) as count from students  ";
						$resultcount=mysqli_query($con,$total);
						$results=mysqli_fetch_assoc($resultcount);

?>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4><a href="std-list-curr.php"><?php echo $r['count'];?></h4></a> <span>Current Students in Ideal Lab</span></div>
									</div>	
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-blue mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4><a href="tot-std-list.php"><?php echo $results['count'];?></h4></a> <span>Total Students Visited Ideal lab</span></div>
									</div>	
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Other Instution Students</span></div>
									</div>	
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
									<div class="dashboard_stats_wrap">
										<div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
										<div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Other Entrepreneurs</span></div>
									</div>	
								</div>

							</div>
							