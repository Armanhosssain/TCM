<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<!-- for shortcut icon -->
		<link rel="shortcut icon" type="image/png" href="bg_image/d.jpg">
		<!-- for various language -->
		<meta charset="utf-8">
		<!-- for responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- font awesome css -->
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<!-- animation css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- main customize css -->
		<link rel="stylesheet" type="text/css" href="css/admission.css">
	</head>
	<body class="">
		<!-- header -->
		<?php include('header.php') ?>
		<!--start page title -->
	<section id="top-title" class="text-center text-light">
	    <div class="row">
	      <div class="col py-5 mt-5">
	        <h2 class="text-light">Application form</h2>
	        <p class="lead">
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, alias?
	        </p>
	      </div>
	    </div>
	</section>
	<!--end page title -->
		<div class="container mt-5"> <!-- start container -->
		<form action="" method="">
			<div class="card mt-4">
			<div class="card-header bg-primary">
			<h3 class="text-white">Personal information</h3>
			</div>
			<div class="card-body">
			<div class="row mt-4">
				<div class="col-md-12">
					<label for="fname">Student name</label>
					<input type="text" class="form-control" id="fname" placeholder="student name">
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-4">
					<label for="db">Date of birth</label>
					<input type="date" class="form-control" id="db" placeholder="Date of birth">
				</div>
				<div class="col-md-4">
					<label for="faname">Father name</label>
					<input type="text" class="form-control" id="faname" placeholder="Father name">
				</div>
				<div class="col-md-4">
					<label for="mname">Mother name</label>
					<input type="text" id="mname" class="form-control" placeholder="Mother name">
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-4">
					<label for="paddress">Present address</label>
					<input type="text" class="form-control" id="paddress" placeholder="Present address">
				</div>
				<div class="col-md-4">
					<label for="paraddress">Parmanent address</label>
					<input type="text" id="paraddress" class="form-control" placeholder="Permanent address">
				</div>
				<div class="col-md-4">
					<label for="pnumber">Phone number</label>
					<input type="text" id="pnumber" class="form-control" placeholder="Phone number">
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-4">
					<label for="nid">NID / PID/ BCID</label>
					<input type="text" class="form-control" id="nid" placeholder="example 123 456 789">
				</div>
				<div class="col-md-4">
					<label  for="gender">Gender</label>
					<select class="custom-select" id="gender">
						<option selected>Choose Your gender from here</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
						<option value="3">Others</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="image">Your image</label>
					<input type="file" id="image" class="form-control" placeholder="Choose your image">
				</div>
			</div>
			</div>
			</div>
			<div class="card">
			<div class="card-header bg-primary">
			<h3 class="text-white">Course content</h3>
			</div>
			<div class="card-body">
			<div class="row mt-4">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Course name</label>
						</div>
						<select class="custom-select" id="inputGroupSelect01">
							<option selected>Choose Your course from here</option>
							<option value="1">Microsoft office</option>
							<option value="2">Graphics</option>
							<option value="3">Web design</option>
							<option value="3">Video editing</option>
							<option value="3">Auto cad</option>
							<option value="3"> Computer Hardware</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="studenet-id">Profile no</label>
						</div>
						<input type="text" placeholder="student id" id="studenet-id" class="form-control">
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-4">
					<label for="course-fee">Course fee</label>
					<input type="number" class="form-control" id="course-fee" placeholder="$ 12000">
				</div>
				<div class="col-md-4">
					<label  for="Payment">Payment</label>
					<input type="number" class="form-control" id="Payment" placeholder="Bkash no 00881234567">
				</div>
				<div class="col-md-4">
					<label for="due">Due</label>
					<input type="number" class="form-control" placeholder="Due" id="due">
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-4">
					<label for="adate">Admission date</label>
					<input type="date" class="form-control" id="adate" placeholder="example 10/4/2019">
				</div>
				<div class="col-md-4">
					<label  for="profession">Profession</label>
					<input type="text" class="form-control" id="profession" placeholder=" example student/Businessman/Housewife">
				</div>
				<div class="col-md-4">
					<label for="duration">Duration</label>
					<input type="number" class="form-control" placeholder="40 hour" id="duration">
				</div>
			</div>
		</div>
	</div>
			<div class="card">
			<div class="card-header bg-primary">
			<h3 class="text-white">Educational Qualification</h3>
			</div>
			<div class="card-body">
			<div class="row mt-4">
				<div class="col-md-4">
					<label  for="ename">Examination name</label>
					<select class="custom-select" id="ename">
						<option selected>Choose Your examination name from here</option>
						<option value="1">SSC / DAKHIL</option>
						<option value="2">HSC/ALIM</option>
						<option value="3">Bsc/Hon's</option>
						<option value="4">Msc/Masters</option>
					</select>
				</div>
				<div class="col-md-4">
					<label  for="board">Board name</label>
					<select class="custom-select" id="board">
						<option selected>Choose Your board name from here</option>
						<option value="1">DHAKA</option>
						<option value="2">CHITTAGONG</option>
						<option value="3">BARISAL</option>
						<option value="4">RAJSHAHI</option>
						<option value="5">COMILLA</option>
						<option value="6">JESSORE</option>
						<option value="7">RAJSHAHI</option>
						<option value="8">SYLHET</option>
						<option value="9">MADRASHA</option>
						<option value="10">TECHNICAL</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="gpa">GPA/CGPA</label>
					<input type="number" id="gpa" class="form-control" placeholder="example: 5.00">
				</div>
			</div>
		</div>
	</div>
			<div class="s-button mb-5">
				<button type="submit" class="btn btn-dark" name="submit">submit</button>
			</div>
		</form>
		</div> <!-- end container -->
		<!-- footer -->
		<?php include('footer.php') ?>
		<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
		<!-- jquery link -->
		<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
		<!-- main customize js link -->
		<script type="text/javascript" src="js/main.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- font awesome js link-->
		<script type="text/javascript" src="js/all.min.js"></script>
		<!-- owl-carousel js link -->
		<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	</body>
</html>