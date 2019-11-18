<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hard-disk dynamit</title>
</head>
<body>
	<?php include('header.php'); ?>
	<!--start page title -->
	<section id="top-title" class="text-center text-light">
	    <div class="row">
	      <div class="col py-5 mt-5">
	        <h2 class="text-light">Hard-disk dynamit</h2>
	        <p class="lead">
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, alias?
	        </p>
	      </div>
	    </div>
	</section>
	<!--end page title -->
	<div class="container">
		<section class="dynamit-definition">
			<div class="row my-5">
				<div class="col-6">
					<div class="card">
						<div class="card-header">
							What is a Dynamic Disk?
						</div>
						<div class="card-body">
						Dynamic disk is another way to configure hardware, except it contains dynamic volumes instead of partitions. Unlike basic disks, the partition can be extended with dynamic disk configuration even after the partition is already created. The dynamic volumes can be noncontiguous meaning you can add more space to the existing primary partitions by extending them into adjacent unallocated space. In addition, you can create specialized disk volumes on a dynamic disk including spanned volumes, striped volumes, mirrored volumes, and RAID-5 volumes.DT

						</div>
					</div>
				</div>
				<div class="col-6">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/IYlGCTaLNKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</section>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>