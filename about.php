<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>about us</title>
			<!-- main customize css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('header.php'); ?>
	<!--start page title -->
	<section id="top-title" class="text-center text-light">
	    <div class="row">
	      <div class="col py-5 mt-5">
	        <h2>About us</h2>
	        <p class="lead">
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, alias?
	        </p>
	      </div>
	    </div>
	</section>
	<!--end page title -->
    <div class="container">		<!-- start container -->
    <!-- start about top -->
      <div class="row my-5 py-5">
        <div class="col-lg-6 col-md-6 align-self-center">
          <h3>Lorem Ipsum Dolor Sit</h3>
          <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium provident, laudantium possimus voluptatum incidunt non eos aut in saepe tenetur vero ad eligendi maxime vitae voluptatibus hic quisquam, veniam pariatur.
          </p>
          <a href="#" class="btn btn-outline-dark">Read More</a>
        </div>
        <div class="col-lg-6 col-md-6">
          <img src="img/slider4.jpg" alt="info image" class="img-fluid rounded">
        </div>
      </div>
      <!-- start testimonial section -->
      <section>
      	<h2 class="text-center my-5"><span class="bottom-border text-primary text-uppercase">Know about us</span></h2>
      	<div class="row">
      		<div class="col-lg-4 col-md-4 col-12 my-3">
      			<div class="card">
				  <!-- <img src="img/slider4.jpg" class="card-img-top rounded-circle" alt="ceo image"> -->
				  <img src="img/slider4.jpg" style="border-radius: 50%; margin: auto;" height="200px" width="200px" alt="">
				  <div class="card-body">
				    <h5 class="card-title">CO</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="co.php" class="btn btn-outline-primary">learn more</a>
				  </div>
				</div>
      		</div>
      		<div class="col-lg-4 col-md-4 col-12 my-3">
      			<div class="card">
				  <img src="img/slider4.jpg" style="border-radius: 50%; margin: auto;" height="200px" width="200px" alt="">
				  <div class="card-body">
				    <h5 class="card-title">CO</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="co.php" class="btn btn-outline-secondary">learn more</a>
				  </div>
				</div>
      		</div>
      		<div class="col-lg-4 col-md-4 col-12 my-3">
      			<div class="card">
				  <img src="img/slider4.jpg" style="border-radius: 50%; margin: auto;" height="200px" width="200px" alt="">
				  <div class="card-body">
				    <h5 class="card-title">CO</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="co.php" class="btn btn-outline-info">learn more</a>
				  </div>
				</div>
      		</div>
      	</div>
      </section>
      <!-- start our support -->
      <section>
      	<h2 class="text-uppercase text-center my-5">Our support</h2>
      	<label for="">Office </label>
      		<div class="progress mb-3 ">
			  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<label for="">Office </label>
			<div class="progress mb-3 ">
			  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<label for="">Office </label>
			<div class="progress mb-3 ">
			  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<label for="">Office </label>
			<div class="progress mb-3 ">
			  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<label for="">Office </label>
			<div class="progress mb-3 ">
			  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
      </section>
       </div> <!-- end container -->
      <?php include('footer.php'); ?>
</body>
</html>