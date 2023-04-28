<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<title>List Parking</title>
	
	<!-- ############################################################################################## -->
		<!-- shortcut icon -->
		<link rel="icon" href="assets/img/shortcut-icon.png">
		
		<!-- bootstrap css -->
		<link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- owl carousel -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

		<!-- owl carousel theme -->
	    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
 		<!-- custom style -->
 		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/find-parking-place.css" rel="stylesheet">
		<link href="assets/css/career.css" rel="stylesheet">
		<link href="assets/css/our-solution.css" rel="stylesheet">
		<link href="assets/css/list-parking.css" rel="stylesheet">
		<link href="assets/css/request-parking.css" rel="stylesheet">
		<link href="assets/css/service.css" rel="stylesheet">
	    <style>
	    
	     input::-webkit-inner-spin-button,
         input::-webkit-outer-spin-button
         {
         -webkit-appearance:none;
         }
        input[type="number"]
        {
        -moz-appearance:textfield;
        }
	</style>
		
		<!-- data table link -->
		<link rel="stylesheet" type="text/css" href="../cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
		
		<link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

		<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

		<script src="../code.jquery.com/jquery-3.3.1.js"></script>





	<!-- ############################################################################################## -->

</head>
<body>


	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md col-lg-10 offset-lg-1  col-md-12  fixed-top navbar-dark" >
				<!-- Brand -->
				<a class="navbar-brand" href="index.php"><img src="assets/img/logot.png" ></a>

				
				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				
				<!-- Navbar links -->
				<div class="collapse navbar-collapse navbar-dark" id="collapsibleNavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link link-a1" href="index.php">Home</a>
						</li>
						
						<li class="nav-item ">
							<a class="nav-link link-a2" href="OurSolution.php">Our Aim</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link link-a3" href="FindParking.php">Find parking</a>
						</li>

						<li class="nav-item">
							<a class="nav-link link-a4" href="ListParking.php">List your Parking</a>
						</li>

						<li class="nav-item">
							<a class="nav-link link-a5" href="Career.php">Career</a>
						</li>

						<li class="nav-item">
							<a class="nav-link link-a6" href="Request.php">Request Parking</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	            

	<div class="upper-space"></div>

	
	<section class="banner-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="banner-img">
						<img src="assets/img/million-job.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div class="banner-content">
						<div>
							<h1>List Your Parking Today</h1>
							<hr class="hr-1" align="center">
							<p>Transformaing Parking Experiences Through Digitization</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="square-pattern">
			<img src="assets/img/square-shapes.png">
		</div>

	</section>


	<div class="container">
		<div class="row">
			<div class="col-md-12 contact-form">
			<form method="post" enctype="multipart/form-data">

					<div class="form-group">
			 			<label>Owner Name</label>
			 			<input class="form-control" id="owner_name" name="owner_name" type="text" placeholder="Enter Your Name" required="">
			 		</div>

			 		<div class="form-group">
			 			<label>Owner Mobile</label>
			 			<input class="form-control" id="owner_mobile" name="owner_mobile" pattern="[0][1][0-9]{9}" maxlength="11" type="text" placeholder="01*********" required="">
			 		</div>

			 		<div class="form-group">
			 			<label>Security Number(if available)</label>
			 			<input class="form-control" id="sequrity_number" name="sequrity_number" type="text" placeholder="Enter Your Mobile">
			 		</div>

			 		<div class="form-group">
			 			<label>Division</label>
			 			<select class="form-control"  id="division" name="division" required="">
			 				<option disabled selected value>- Select -</option>
			 				<option value="Dhaka">Dhaka</option>
			                <option value="Sylhet">Sylhet</option>
			                <option value="Chittagong">Chittagong</option>
			 			</select>
			 		</div>

			 		<div class="form-group">
			 			<label>Locality</label>
			 			<input class="form-control" id="local" name="local" type="text" placeholder="Enter Your Name" required="">
			 			</select>
			 		</div>

			 		<div class="form-group">
			 			<label>Allow Bike?</label>
			 			<select class="form-control"  id="bike" name="bike">
			 				<option value="1">Yes</option>
			 				<option value="0">No</option>
			 			</select>
			 		</div>

			 		<div class="form-group">
			 			<label>Total Slot Bike</label>
			 			<input class="form-control" id="total_slot_bike" name="total_slot_bike" type="number" min="0" max="100" value="0" placeholder="Enter Your Bike Slot" required="">
			 		</div>

			 		<div class="form-group">
			 			<label>Allow Car?</label>
			 			<select class="form-control"  id="car" name="car">
			 				<option value="1">Yes</option>
			 				<option value="0">No</option>
			 			</select>
			 		</div>

			 		<div class="form-group">
			 			<label>Total Slot Car</label>
			 			<input class="form-control" id="total_slot_car" name="total_slot_car" type="number" min="0" max="100" value="0" placeholder="Enter Your Bike Slot" required="">
			 		</div>

			 		<div class="form-group">
			 			<label>Allow Bicycle?</label>
			 			<select class="form-control"  id="bycycle" name="bycycle">
			 				<option value="1">Yes</option>
			 				<option value="0">No</option>
			 			</select>
			 		</div>

			 		<div class="form-group">
			 			<label>Allow Monthly?</label>
			 			<select class="form-control"  id="monthly" name="monthly">
			 				<option value="yes">Yes</option>
			 				<option value="no">No</option>
			 			</select>
			 		</div>

			 		<div class="form-group">
						<label>Monthly Cost</label>
						<input class="form-control" id="monthly_cost" name="monthly_cost" type="number" min="0" step="500" max="10000" value="0" placeholder="Enter Your Bike Slot" required="">
					</div>

			 		<div class="form-group">
			 			<label>Allow Hourly?</label>
			 			<select class="form-control"  id="hourly" name="hourly">
			 				<option value="yes">Yes</option>
			 				<option value="no">No</option>
			 			</select>
			 		</div>

			 		<div class="form-group">
			 			<label>Start time</label>
			 			<input type="time" name="start_time" id="start_time" value="00:01" class="form-control">
			 		</div>

			 		<div class="form-group">
			 			<label>End time</label>
			 			<input type="time" name="end_time" id="end_time" value="23:59" class="form-control">
			 		</div>

			 		<div class="form-group">
			 			<label>Place Category</label>
			 			<select class="form-control"  id="place_cat" name="place_cat">
			 				<option value="Market">Market</option>
			 				<option value="Residential">Residential</option>
			 			</select>
			 		</div>

					 <div class="form-group">
			 			<label>Upload image</label>
			 			<input type="file" name="image" id="image" class="form-control">
			 		</div>

			 		<div class="form-group">
    					<label>Facility?</label> <br>
						<input type="hidden" name="cctv" value="0">
						<input type="checkbox" name="cctv" id="cctv" value="1"> CCTV
						<input type="hidden" name="guard" value="0">
						<input type="checkbox" name="guard" id="guard" value="1"> Guard
						<input type="hidden" name="indoor" value="0">
						<input type="checkbox" name="indoor" id="indoor" value="1"> Indoor
					</div>




			 		<a  data-toggle="modal" data-target="#confirm_modal" id="listy-submit" class="listy-submit-btn">Register</a>
			 		<!-- The Modal -->
                      <div class="modal fade" id="confirm_modal">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header border-bottom-0 justify-content-center" align="center">
                              <h4 align="center">Please Confirm Your Request</h4>
                            </div>
                            <img src="assets/img/mail.png" class="img-fluid mx-auto">
                            
                            <!-- Modal body -->
                            <div class="modal-body mt-4" align="center">
                              <button  class="btn btn-warning px-4" name='parking_space'>Confirm</button>
                              <a  class="btn btn-danger px-4" data-dismiss="modal">Cancel</a>
                            </div>
                            
                          </div>
                        </div>
				</form>
			</div>
		</div>
	</div>


	<!-- ############################################################################################## -->






	<!-- ############################################################################################## -->
	
		
		<!-- Data Table Minified JS -->
		<script src="../cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

		<!-- Data Table Minified Bootstrap JS -->
		<script src="../cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>

		<!-- Moment js for Data Table -->
		<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

		<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
		
		


		<!-- jquery -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		
		<!-- Popper -->
		<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		
		<!-- bootstrap js -->
		<script src="../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!-- fontawesome js -->
		<script src="../kit.fontawesome.com/f201ec0110.js" crossorigin="anonymous"></script>

		<!-- owl carousel js -->
		<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		
		<!-- custom js  -->
		<script type="text/javascript" src="assets/js/script.js"></script> 

	<!-- ############################################################################################## -->
</body>
</html>