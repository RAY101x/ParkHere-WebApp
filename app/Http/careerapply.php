<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<title>Apply</title>
	
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
							<a class="nav-link link-a2" href="OurSolution.php">Our Solution</a>
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
	   <div class="col-md-6 mt-5 mx-auto">
        <div class="row my-4">
	    <div class="col-md-6">
            <div class="">
              <img
                class="w-100"
                src="../i.ibb.co/hMzBzMF/million-job.png"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6 mt-5">
            <div class="mt-4 text-center ">
              <h2 class="reqTitle text-success">Job Apply</h2>
              <p class="mt-5" style="color:gray">
                Transformaing Parking Experiences Through Digitization
              </p>
            </div>
           </div>
          </div>
        <div class="contact-wrap formArea mt-5 rounded">
        <h4 class="text-center text-success text-uppercase my-2">
          Please fill up this form
        </h4>
		<form method="post" enctype="multipart/form-data">

<div class="form-group">
	 <label>Name</label>
	 <input class="form-control" id="name" name="name" type="text" placeholder="Enter Your Name" required="">
 </div>



 <div class="form-group">
	 <label>Contact Number</label>
	 <input class="form-control" id="mobile" name="mobile" pattern="[0][1][0-9]{9}" maxlength="11" type="text" placeholder="01*********" required="">
 </div>



 <div class="form-group">
	 <label>Address</label>
	 <input class="form-control" id="local" name="local" type="text" placeholder="Enter Your Address" required="">
	 </select>
 </div>

 <div class="form-group">
	 <label>Email</label>
	 <input class="form-control"  id="parkingloc" name="parkingloc" type="text" placeholder="Enter Email" required="">
 </div>

 <div class="form-group">
	 <label> About yourself in short </label>
	 <input class="form-control" id="vehtyp" name="vehtyp" type="text" placeholder="Enter description" required="">
 </div>

 <a  data-toggle="modal" data-target="#confirm_modal" id="listy-submit" class="listy-submit-btn">Apply</a>
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
		  <button  class="btn btn-warning px-4" name=''>Confirm</button>
		  <a  class="btn btn-danger px-4" data-dismiss="modal">Cancel</a>
		</div>
		
	  </div>
	</div>
</form>
			</div>
		</div>


	</section>

<br><br><br><br><br>

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