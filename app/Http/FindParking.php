<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<title>Find Parking</title>
	
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

	            
	<section class="banner-area">
		<div class="container">
			<div class="row col-md-10 my-4 mx-auto">
            			<div class="col-md-6 mt-5">
                        <div class="">
                          <img
                            class="w-100 p-4"
                            src="../i.ibb.co/hMzBzMF/million-job.png"
                            alt=""
                          />
                        </div>
                      </div>
                <div class="col-md-6 mt-5 rounded searchArea">
                    <div class="mt-4 text-center ">
                    <h2 class="reqTitle text-success">
                      Find Parking
                    </h2>
                    <div class="col-md-8 mx-auto mt-4">
                      <form method="post" action="FindParking.php">
                        <div class="time-picker-section">
                          <div class="row">
                            <div class="col-6 pl-1">
                              <div class="form-group ">
                               <label>Division</label>
					 			<select class="form-control"  id="division" name="division" required="">
					 				<option disabled selected value>- Select -</option>
					 				<option value="Dhaka">Dhaka</option>
					                <option value="Sylhet">Sylhet</option>
					                <option value="Chittagong">Chittagong</option>
					 			</select>
                              </div>
                            </div>
            
                            <div class="col-6 pr-1">
                              <div class="form-group">
                               <label>Locality</label>
					 			<select class="form-control"  id="local" name="local" required="">
    				 				<option disabled selected value>- Select -</option>
    					 				<option value="Dhaka">Dhaka</option>
    					                <option value="Sylhet">Sylhet</option>
    					                <option value="Chittagong">Chittagong</option>
    					 		 </select>
                              </div>
                            </div>
                          </div>
                        </div>
            
                       <button type="submit" id="sign" class="btn btn-block mt-3 datepicker-btn">Search</button>
                      </form>
                    </div>
                  </div>
               </div>
		
		</div>
    </div>

	</section>




	<section class="find-parking-table">
		<div class="px-5">


			<div class="row">
				<div class="col-md-12">
					
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered">
				        <thead>
				            <tr>
				                <th >Sl</th>
				                <th >Image</th>
				                <th >Division</th>
				                <th >Locality</th>
				                <th >Place Type</th>
				                <th >Rent</th>
				                <th >Indor</th>
				                <th >CC Camera</th>
				                <th >Guard</th>
				                <th width="14%">Book</th>
				            </tr>
				        </thead>

				        <tbody id="find_park_t">
				            <?php
								$sql = "SELECT * FROM list_parking";
								$res = mysqli_query($db, $sql);
								$report = mysqli_fetch_all($res, MYSQLI_ASSOC)
							?>
							<?php foreach($report as $item): ?>
							<tr>
								<td><?php echo $item['id'] ?></td>
								<td>
									<?php
									// connect to the database
									$db = mysqli_connect('localhost', 'root', '', 'parkhere');
									
									// get the image data from the database
									$id = $item['id'];
									$sql = "SELECT image FROM list_parking WHERE id=$id";
									$result = mysqli_query($db, $sql);
									$row = mysqli_fetch_assoc($result);
									
									// display the image
									echo '<img src="data:image/png;base64,' . base64_encode($row['image']) . '" width="200" height="200">';
									?>
								</td>
								<td><?php echo $item['division'] ?></td>
								<td><?php echo $item['locality'] ?></td>
								<td><?php echo $item['place_cat'] ?></td>
								<td><?php echo $item['monthly_cost'] ?></td>
								<td><?php echo $item['cctv'] ?></td>
								<td><?php echo $item['indoor'] ?></td>
								<td><?php echo $item['guard'] ?></td>
								<td align="center"><a href="Recharge.php"><button>Book Parking</button></a></td>
							</tr>

							<?php endforeach ?>

				        </tbody>
				    </table>
				</div>
			</div>
			</div>
		</div>
	</section>



	<section class="suitable-parking">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="suitable-parking-content" align="center">
						<h1>Could Not Find Any Suitable parking?</h1>
						<a class="nav-link link-a6 w-50" href="Request.php" style="text-align: center">Request Parking</a>
					</div>
				</div>
			</div>
		</div>
	</section>




<script type="text/javascript">
	  $("#division").on("change",function(){
	    var value = $(this).val();
	    var url = 'home/get_seperate_locality.php';
	    $.ajax({
	         url : url,
	         type: "post",
	         data: {"value":value},
	         success : function(data){
	             $("#local").php(data);
	             //alert(data);
	         },
	    });
	});
	</script>

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