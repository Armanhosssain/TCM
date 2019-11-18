<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallery</title>
</head>
<body>
	<?php include('header.php'); ?>
	<!--start page title -->
	<section id="top-title" class="text-center text-light">
	    <div class="row">
	      <div class="col py-5 mt-5">
	        <h2 class="text-light">Photo gallery</h2>
	        <p class="lead">
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, alias?
	        </p>
	      </div>
	    </div>
	</section>
	<!--end page title -->
	  <!-- start gallery -->
  <section id="gallery" class="py-5" uk-lightbox>
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col text-light">
          <h3 class="text-light">Photo Gallery</h3>
          <p class="">Check out our photos</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/hjg.jpg">
              <img src="img/hjg.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/index.jpg">
              <img src="img/index.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/nbjhg.jpg">
              <img src="img/nbjhg.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/kjhu.jpg">
              <img src="img/kjhu.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/slider5.jpg">
              <img src="img/slider5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/stafg.jpg">
              <img src="img/stafg.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end gallery -->
	<?php include('footer.php'); ?>
</body>
</html>